let tabsIcon = document.querySelector('.menu-icon')
let list = document.querySelector('.navbarpro__list')
let blockbox = document.querySelector('.block-menu')

tabsIcon.addEventListener('click',function () {
    list.classList.add('active');
    blockbox.classList.add('active');
});
blockbox.addEventListener('click', function(){
    list.classList.remove('active');
    blockbox.classList.remove('active');
});
$(function(){
    $(window).scroll(function (){
        if($(this).scrollTop() > 500){
            $('.top').fadeIn();
        }
        else{
            $('.top').fadeOut();
        }
    });
    $('.top').click(function () {
        $('html, body').animate({scrollTop: 0}, 100 );
    });
})