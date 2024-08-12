$(document).ready(function(){ //Hacia arriba
    irArriba();
  });
  
  function irArriba(){
    $('.section-up-button').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });
    $(window).scroll(function(){
      if($(this).scrollTop() > 0){ $('.section-up-button').slideDown(600); }else{ $('.section-up-button').slideUp(600); }
    });
    $('.go-down').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
  }
