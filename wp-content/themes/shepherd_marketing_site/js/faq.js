document.addEventListener('DOMContentLoaded', function () {
    /************************** Initial Load *********************/
    const faqs = document.querySelector('.block-faqs');
    if (faqs) {
        load_faqs();
    }
    /************************* Filter Click Handler ************************/
    const faqFilters = document.querySelectorAll('.faqs-filter li');
    faqFilters.forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            // Remove active class from siblings //
            const siblings = btn.parentElement.querySelectorAll('li');
            siblings.forEach(function (el) { el.classList.remove('active'); });
            // Add active class to this one //
            btn.classList.add('active');
            // Update label on mobile //
            const label = btn.innerHTML;
            const faqFilterTriggerLabel = document.getElementById('faq-filter-trigger').querySelector('span');
            faqFilterTriggerLabel.innerHTML = label;
            // remove active menu class on mobile //
            const faqFilterMenu = document.querySelector('.faqs-filter');
            faqFilterMenu.classList.remove('active');
            // run query //
            const id = btn.getAttribute('data-id');
            load_faqs(id);
        });
    });
    /*********************** FAQ Click Handler **************************/
    const faqsList = document.querySelector('faqs-list') || document;
    faqsList.addEventListener('click', (e) => {
        const btn = e.target.closest('.faqs-card-q');
        if (!btn || !faqsList.contains(btn)) return;
        // Close other cards //
        const cards = document.querySelectorAll('.faqs-card');
        cards.forEach(function (card) {
            card.classList.remove('active');
        });
        // Add/remove active state to the card //
        const card = btn.closest('.faqs-card');
        card.classList.toggle('active');
        smoothScrollTo(card, { offset: 150, duration: 500 });
    });
    /************************ Open the filter on mobile *************************/
    const faqFilterTrigger = document.getElementById('faq-filter-trigger');
    if (faqFilterTrigger) {
        faqFilterTrigger.addEventListener('click', function() {
            const faqFilterMenu = document.querySelector('.faqs-filter');
            faqFilterMenu.classList.toggle('active');   
        });
    }
});


/**************************** Helpers ***********************************/
function smoothScrollTo(el, opts = 0) {
  // Back-compat: smoothScrollTo(el, offset)
  const options = typeof opts === 'number' ? { offset: opts } : (opts || {});
  const {
    offset = 0,
    duration = 1000,                 // ms — increase to slow down
    easing = (t) => t < 0.5 ? 2*t*t : -1 + (4 - 2*t)*t, // easeInOutQuad
  } = options;

  const prefersReduced = window.matchMedia?.('(prefers-reduced-motion: reduce)').matches;
  const startY = window.pageYOffset || document.documentElement.scrollTop || 0;
  const rect = el.getBoundingClientRect();
  const endY = startY + rect.top - offset;

  // Clamp to document bounds
  const maxY = Math.max(0, document.documentElement.scrollHeight - window.innerHeight);
  const targetY = Math.min(Math.max(0, endY), maxY);

  if (prefersReduced || duration <= 0) {
    window.scrollTo(0, targetY);
    return;
  }

  let t0 = null;
  function frame(ts) {
    if (t0 === null) t0 = ts;
    const elapsed = ts - t0;
    const p = Math.min(1, elapsed / duration);
    const y = startY + (targetY - startY) * easing(p);
    window.scrollTo(0, y);
    if (p < 1) requestAnimationFrame(frame);
  }
  requestAnimationFrame(frame);
}

function load_faqs(id) {
    const faqsList = document.querySelector('.faqs-list');
    faqsList.innerHTML = '';
    loaderOn();
    const data = new FormData();
    data.append('action', 'load_faqs');
    if (id) {
        data.append('term_id', id);
    }
    fetch(ajaxurl, {
        method: 'POST',
        body: data
      })
    .then(res => res.json())
    .then(response => {
        const groups = response.data.groups;
        groups.forEach(function (group) {
            const termName = group.term?.name ?? 'Uncategorized';
            const html = `<h3>${termName}</h3></div>`;
            faqsList.insertAdjacentHTML('beforeend', html);
            const items = group.items;
            items.forEach(function (item) {
                const html = `
                <div class="faqs-card">
                    <p class="faqs-card-q"><span></span>${item.title}<p>
                    <div class="faqs-card-a">${item.answer}</div>
                    <div class="gradient"></div>
                </div>`;
                faqsList.insertAdjacentHTML('beforeend', html);
            });
        });
        if (id) {
            const topOfList = document.querySelector('.faqs-list');
            smoothScrollTo(topOfList, { offset: 150, duration: 500 });
        }
        loaderOff();
    })
    .catch(err => {
        console.error('Request failed:', err);
    });
}

function loaderOn() {
    const loader = document.querySelector('.faqs-loader');
    loader.style.display = 'block';
    return;
}
function loaderOff() {
    const loader = document.querySelector('.faqs-loader');
    loader.style.display = 'none';
    return;
}