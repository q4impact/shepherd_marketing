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
    });
});