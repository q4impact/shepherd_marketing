$(window).on('scroll',function(){
    if($(window).scrollTop()){
        $('header').addClass('sticky');
    }
    else{
        $('header').removeClass('sticky');
    }
})

document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    menuToggle.addEventListener('click', (e) => {
        menuToggle.classList.toggle('active');
        const menu = document.querySelector('header ul');
        menu.classList.toggle('active');
        const headerSocial = document.getElementById('header-social');
        headerSocial.classList.toggle('active');
        if (menuToggle.classList.contains('active')) {
            disableScroll();
        } else {
            enableScroll();
        }
        
    });
});

/************************** Helpers *******************************/
function disableScroll() {
  // Add a class that sets overflow: hidden to the body
  document.body.classList.add("no-scroll");
}

function enableScroll() {
  // Remove the class to restore normal scrolling
  document.body.classList.remove("no-scroll");
}