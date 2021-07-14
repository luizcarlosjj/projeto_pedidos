let menuMobile = document.getElementById('menuMobile');

function showMenuMobile(){
    let menuContent = document.getElementById('menuContentMobile');

    if(menuContent.style.display === 'flex'){
        menuContent.style.display = 'none'
        menuMobile.innerText = 'menu'
        
    } else{
        menuContent.style.display = 'flex'
        menuMobile.innerText = 'close'
    }
    
    
    
}

menuMobile.addEventListener('click', showMenuMobile)




$(document).ready(function(){
    $('#tel').mask('(00)00000-0000')
    $('#hour_initial').mask('00:00')
    $('#hour_final').mask('00:00')


    $('.closeMsg').on('click', function(){
        $('.msgSuccess').fadeOut(300)
    })


})