

$(function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        
        if(listaMenu.is(':hidden') == true){
            var icone = $('.botao-menu').find('i');
            icone.removeClass('fas fa-bars');
            icone.addClass('fas fa-times');
            listaMenu.slideToggle();
        }
        else{
            var icone = $('.botao-menu').find('i');
            icone.removeClass('fas fa-times');
            icone.addClass('fas fa-bars');
            listaMenu.slideToggle();
        }
  
    });

    if($('target').length > 0){
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({scrollTop:divScroll},1500);
    }
    
})

