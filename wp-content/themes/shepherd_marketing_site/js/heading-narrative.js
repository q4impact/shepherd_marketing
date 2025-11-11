document.addEventListener('DOMContentLoaded', function () {
    const videoButtons = document.querySelectorAll('.video-demo-button'); 
    videoButtons.forEach(element => {
        element.addEventListener('click', function(event) {
            event.preventDefault();             
            
        });
    });
});