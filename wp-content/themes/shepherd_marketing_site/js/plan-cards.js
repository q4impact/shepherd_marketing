document.addEventListener('DOMContentLoaded', function () {
    /************************** All Details Modal *****************************/
    const detailsClose = document.querySelectorAll('.all-details-close');
    detailsClose.forEach(element => {
        element.addEventListener('click', function(event) {
            event.preventDefault();
            const button = event.currentTarget;
            button.parentElement.classList.remove('active');
        });
    });
    const seeAllDetails = document.querySelectorAll('.see-all-details');
    seeAllDetails.forEach(element => {
        element.addEventListener('click', function(event) {
            event.preventDefault();
            // Close the other if applicable //
            const otherDetails = document.querySelectorAll('.plan-card-all-details');
            otherDetails.forEach(detailsModal => {
                detailsModal.classList.remove('active');
            });
            // Open this one //
            const button = event.currentTarget;
            button.nextElementSibling.classList.add('active');
        });
    });
    /************************* Get Started Modal ******************************/
    const contactFormClose = document.getElementById('plan-cards-contact-close');
    if (contactFormClose) {
        contactFormClose.addEventListener('click', function() {
            const contactForm = document.querySelector('.plan-cards-contact');
            contactForm.classList.remove('active');
        });    
    }
    const getStartedButtons = document.querySelectorAll('.get-started-button');
    if (getStartedButtons) {
        getStartedButtons.forEach(element => {
        element.addEventListener('click', function(event) {
            event.preventDefault();
            const contactForm = document.querySelector('.plan-cards-contact');
            contactForm.classList.add('active');
        });
    });
    }
});