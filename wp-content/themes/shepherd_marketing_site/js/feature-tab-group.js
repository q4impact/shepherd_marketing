document.addEventListener('DOMContentLoaded', function () {
    // Activate the first element of each card tab group on the page //
    const featureTabGroups = document.querySelectorAll('.feature-tab-group');
    featureTabGroups.forEach(function (featureTabGroup) {
        const nav = featureTabGroup.querySelector('.feature-tab-group-nav');
        const firstNavItem = nav.firstElementChild;
        firstNavItem.classList.add('active');
        const firstTab = featureTabGroup.querySelector('.feature-tab-group-tab');
        firstTab.classList.add('active');
        const text = firstTab.querySelector('.feature-tab-group-tab-text');
        text.classList.add('active');
        const image = firstTab.querySelector('.feature-tab-group-tab-image');
        image.classList.add('active');
    });
    // Click handler for nav //
    const featureTabNav = document.querySelectorAll('.feature-tab-group-nav-item');
    featureTabNav.forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            // Remove active from siblings //
            const siblings = btn.parentElement.querySelectorAll('.feature-tab-group-nav-item');
            siblings.forEach(function (el) { el.classList.remove('active'); });
            // Add active to this button //
            btn.classList.add('active');
            // Display the tab and hide the others //
            const index = btn.getAttribute('data-index');
            const id = btn.getAttribute('data-id');
            const parent = document.getElementById(id);
            const tabs = parent.querySelectorAll('.feature-tab-group-tab');
            tabs.forEach(function (el) {
                 const elIndex = el.getAttribute('data-index');
                 if (elIndex == index) {
                     el.classList.add('active');
                     const text = el.querySelector('.feature-tab-group-tab-text');
                    text.classList.add('active');
                    const image = el.querySelector('.feature-tab-group-tab-image');
                    image.classList.add('active');
                 } else {
                     el.classList.remove('active');
                 }
             });
             // If Mobile //
            const featureTabGroupNav = document.querySelector('.feature-tab-group-nav');
            featureTabGroupNav.classList.remove('active');
            // Scroll To //
            const scrollTo = document.querySelector('.feature-tab-group-nav');
            smoothScrollTo(scrollTo, { offset: 50, duration: 500 });
        });
    });
    // Mobile //
    const featureTabGroupTrigger = document.querySelector('.feature-tab-group-trigger');
    if (featureTabGroupTrigger) {
        featureTabGroupTrigger.addEventListener('click', function() {
            const featureTabGroupNav = document.querySelector('.feature-tab-group-nav');
            featureTabGroupNav.classList.toggle('active');   
        });
    }
});