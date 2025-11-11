(function (wp) {
  const { hooks, compose, data, components, i18n, blocks } = wp;
  const el = wp.element.createElement;
  const { addFilter } = hooks;
  const { __ } = i18n;
  const { createHigherOrderComponent } = compose;

  // Support both modern and legacy names
  const be = wp.blockEditor || wp.editor;
  const BlockControls  = be.BlockControls;
  const BlockDraggable = be.BlockDraggable || null; // may be undefined on some WP versions
  const BlockMover     = be.BlockMover || null;

  const ToolbarGroup   = components.ToolbarGroup;
  const ToolbarButton  = components.ToolbarButton;

  // Helpers
  const isTargetBlock = (name) => typeof name === 'string' && name.indexOf('acf/') === 0;
  const getBlockTitle = (name) => {
    try {
      const type = blocks && blocks.getBlockType ? blocks.getBlockType(name) : null;
      return (type && type.title) ? String(type.title) : name.replace(/^acf\//, '').replace(/-/g, ' ');
    } catch (e) {
      return name.replace(/^acf\//, '').replace(/-/g, ' ');
    }
  };

  // 1) Add a "collapsed" attribute to ALL acf/* blocks
  addFilter('blocks.registerBlockType', 'hn/admin-collapse/extend-attrs',
    function (settings, name) {
      if (!isTargetBlock(name)) return settings;
      settings.attributes = Object.assign({}, settings.attributes, {
        collapsed: { type: 'boolean', default: false }
      });
      return settings;
    }
  );

  // 2) Wrap the edit UI for ALL acf/* blocks
  const withAdminCollapse = createHigherOrderComponent(function (BlockEdit) {
    return function (props) {
      if (!isTargetBlock(props.name)) return el(BlockEdit, props);

      const clientId  = props.clientId;
      const attrs     = props.attributes || {};
      const collapsed = !!attrs.collapsed;

      const setAttr = function (patch) {
        data.dispatch('core/block-editor').updateBlockAttributes(clientId, patch);
      };
      const toggleCollapsed = function () {
        setAttr({ collapsed: !collapsed });
      };

      // Build drag UI (BlockDraggable if present; otherwise BlockMover; else nothing)
      let dragHandleEl = null;
      if (BlockDraggable) {
        dragHandleEl = el(
          BlockDraggable,
          { clientIds: [clientId] },
          function (dragProps) {
            return el(
              'button',
              {
                type: 'button',
                className: 'hn-admin-collapsible__drag',
                draggable: true,
                onDragStart: dragProps.onDraggableStart,
                onDragEnd: dragProps.onDraggableEnd,
                'aria-label': __('Drag to reorder block', 'blankie')
              },
              '⋮⋮'
            );
          }
        );
      } else if (BlockMover) {
        dragHandleEl = el(
          'div',
          { className: 'hn-admin-collapsible__mover' },
          el(BlockMover, { clientIds: [clientId] })
        );
      }

      const title = getBlockTitle(props.name);

      return el(
        'div',
        { className: 'hn-admin-collapsible' + (collapsed ? ' is-collapsed' : '') },

        // Your Collapse control in the top toolbar
        el(
          BlockControls,
          null,
          el(
            ToolbarGroup,
            null,
            el(ToolbarButton, {
              icon: collapsed ? 'visibility' : 'hidden',
              label: collapsed ? __('Expand', 'blankie') : __('Collapse', 'blankie'),
              onClick: toggleCollapsed
            })
          )
        ),

        // Header strip (drag + title + toggle)
        el(
          'div',
          { className: 'hn-admin-collapsible__bar' },
          dragHandleEl,
          el('p', { className: 'hn-admin-collapsible__title' }, title),
          el('button', {
            type: 'button',
            className: 'hn-admin-collapsible__toggle',
            onClick: toggleCollapsed,
            'aria-expanded': !collapsed
          }, collapsed ? __('Expand', 'blankie') : __('Collapse', 'blankie'))
        ),

        // Body (hidden when collapsed)
        el(
          'div',
          { className: 'hn-admin-collapsible__body', 'aria-hidden': collapsed },
          el(BlockEdit, props)
        )
      );
    };
  }, 'withAdminCollapse');

  addFilter('editor.BlockEdit', 'hn/admin-collapse/wrap', withAdminCollapse);
})(window.wp);
