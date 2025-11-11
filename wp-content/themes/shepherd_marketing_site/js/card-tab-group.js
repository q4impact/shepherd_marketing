document.addEventListener('DOMContentLoaded', function () {
    // Activate the first element of each card tab group on the page //
    const cardTabGroups = document.querySelectorAll('.card-tab-group');
    cardTabGroups.forEach(function (cardTabGroup) {
        const nav = cardTabGroup.querySelector('.card-tab-group-nav');
        const firstNavItem = nav.firstElementChild;
        firstNavItem.classList.add('active');
        const firstTab = cardTabGroup.querySelector('.card-tab-group-tab');
        firstTab.classList.add('active');
        const card1 = firstTab.querySelector('.card-tab-group-card-1');
        card1.classList.add('active');
        const card2 = firstTab.querySelector('.card-tab-group-card-2');
        card2.classList.add('active');
        const card3 = firstTab.querySelector('.card-tab-group-card-3');
        card3.classList.add('active');
    });
    // Click handler for nav //
    const cardTabNav = document.querySelectorAll('.card-tab-nav');
    cardTabNav.forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            // Remove active from siblings //
            const siblings = btn.parentElement.querySelectorAll('.card-tab-nav');
            siblings.forEach(function (el) { el.classList.remove('active'); });
            // Add active to this button //
            btn.classList.add('active');
            // Display the tab and hide the others //
            const index = btn.getAttribute('data-index');
            const id = btn.getAttribute('data-id');
            const parent = document.getElementById(id);
            const tabs = parent.querySelectorAll('.card-tab-group-tab');
            tabs.forEach(function (el) {
                const elIndex = el.getAttribute('data-index');
                if (elIndex == index) {
                    el.classList.add('active');
                    // add active class to its cards to start animation //
                    const card1 = el.querySelector('.card-tab-group-card-1');
                    card1.classList.add('active');
                    const card2 = el.querySelector('.card-tab-group-card-2');
                    card2.classList.add('active');
                    const card3 = el.querySelector('.card-tab-group-card-3');
                    card3.classList.add('active');
                } else {
                    el.classList.remove('active');
                }
            });
            // If Mobile //
            const cardTabGroupNav = document.querySelector('.card-tab-group-nav');
            cardTabGroupNav.classList.remove('active');
            // Scroll To //
            const scrollTo = document.querySelector('.card-tab-group-nav');
            smoothScrollTo(scrollTo, { offset: 0, duration: 500 });           
        });
    });
    // Mobile //
    const cardTabGroupTrigger = document.querySelector('.card-tab-group-trigger');
    if (cardTabGroupTrigger) {
        cardTabGroupTrigger.addEventListener('click', function() {
            const cardTabGroupNav = document.querySelector('.card-tab-group-nav');
            cardTabGroupNav.classList.toggle('active');   
        });
    }
});