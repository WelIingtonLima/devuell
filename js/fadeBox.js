/*$(function(){
    var atual = -1;
    var maximo = $('.box-projetos').length -1;
    var timer;
    var animacaoDelay = 1.5;

    executarAnimacao();
    function executarAnimacao(){
        $('.box-projetos').hide();
        $('.projetos').hide();
        $('.projetos').fadeIn(1500);
        timer = setInterval(LogicaAnimacao,animacaoDelay*1000);
        
        function LogicaAnimacao(){
            atual++;
            if(atual > maximo){
                clearInterval(timer);
                return false;
            }
            
            $('.box-projetos').eq(atual).fadeIn(1500);

        }
    }

})*/