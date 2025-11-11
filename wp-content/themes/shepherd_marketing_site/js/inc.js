document.addEventListener('DOMContentLoaded', function () {
/************************* Demo Video *************************/
    const demoClose = document.getElementById('demo-video-close');
    demoClose.addEventListener('click', function() {
        const demoVideoModal = document.getElementById('demo-video');
        demoVideoModal.classList.remove('active');
        stopDemoVideo();   
    });
    const demoButtons = document.querySelectorAll('.video-demo-button')
    demoButtons.forEach(element => {
        element.addEventListener('click', function(event) {
            event.preventDefault();
            const demoVideoModal = document.getElementById('demo-video');
            demoVideoModal.classList.add('active');
        });
    });  
    function stopDemoVideo() {
        const demoVideo = document.getElementById('demo-video-file');
        if (demoVideo) {
            demoVideo.pause();
            demoVideo.currentTime = 0;
        }
    }
});