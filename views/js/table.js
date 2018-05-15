$('.dropdown-toggle').dropdown();
  $(".tabela2").hide();	
  $(".tabela3").hide();	
  $(".tabela4").hide();	
  $(".tabela5").hide();	
  $(".tabela6").hide();	

  $('.segunda').click(function(){
    $(".tabela2").fadeOut(500);
    $(".tabela3").fadeOut(500);
    $(".tabela4").fadeOut(500);
    $(".tabela5").fadeOut(500);
    $(".tabela6").fadeOut(500);
    $(".tabela1").delay(500).fadeIn(500);
  });

  $('.terca').click(function(){
    $(".tabela1").fadeOut(500);
    $(".tabela3").fadeOut(500);
    $(".tabela4").fadeOut(500);
    $(".tabela5").fadeOut(500);
    $(".tabela6").fadeOut(500);
    $(".tabela2").delay(500).fadeIn(500);
  });

  $('.quarta').click(function(){
    $(".tabela1").fadeOut(500);
    $(".tabela2").fadeOut(500);
    $(".tabela4").fadeOut(500);
    $(".tabela5").fadeOut(500);
    $(".tabela6").fadeOut(500);
    $(".tabela3").delay(500).fadeIn(500);
  });	

  $('.quinta').click(function(){
    $(".tabela1").fadeOut(500);
    $(".tabela2").fadeOut(500);
    $(".tabela3").fadeOut(500);
    $(".tabela5").fadeOut(500);
    $(".tabela6").fadeOut(500);
    $(".tabela4").delay(500).fadeIn(500);
  });

  $('.sexta').click(function(){
    $(".tabela1").fadeOut(500);
    $(".tabela2").fadeOut(500);
    $(".tabela3").fadeOut(500);
    $(".tabela4").fadeOut(500);
    $(".tabela6").fadeOut(500);
    $(".tabela5").delay(500).fadeIn(500);
  });			

  $('.sabado').click(function(){
    $(".tabela1").fadeOut(500);
    $(".tabela2").fadeOut(500);
    $(".tabela3").fadeOut(500);
    $(".tabela4").fadeOut(500);
    $(".tabela5").fadeOut(500);
    $(".tabela6").delay(500).fadeIn(500);
  });	