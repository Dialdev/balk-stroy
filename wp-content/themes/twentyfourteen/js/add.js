$(function(){
$('#wrapping input[name="phone"]').inputmask("+7 (999) 999-99-99");

$('#_wpnonce').attr('value', 'test');

$('#prt_arrow_left').click(function(){
	if ($('#prt_move').css('left')!='0px') return;
	width=$('#prt_move a').width()+6;
	
	$('#prt_move').css('left',-width-12);
	$('#prt_move a:last').detach().prependTo('#prt_move');
	$('#prt_move').animate({'left':'0px'},320);  
	
  });
  $('#prt_arrow_right').click(function(){
    if ($('#prt_move').css('left')!='0px') return;
	width=$('#prt_move a').width()+6;
    $('#prt_move').animate({'left':'-'+width},320,function(){
      $('#prt_move .partner:first').detach().appendTo('#prt_move');
      $('#prt_move').css('left','0px');
    });
  });
$('.partner').fancybox();
  setInterval(gallclick1,6000);
function gallclick1(){
  $('#prt_arrow_right').click();
}
  $('.gray.call-back').click(function(){
    $('.feedback').slideToggle();
    		$('.back').fadeIn("slow");
  });
 $('.back').click(function(){
    $('.feedback').slideToggle();
    		$('.back').fadeOut("slow");
  });
  
});				

	  
	  $(function(){

	  $('.left').click(function(){
    if ($('.galery_move').css('left')!='0px') return;
    $('.galery_move a:last').detach().prependTo('.galery_move');
    $('.galery_move').css('left','-162px');
    $('.galery_move').animate({'left':'0px'},2000);
});

$('.right').click(function(){
    if ($('.galery_move').css('left')!='0px') return;
    $('.galery_move').animate({'left':'-162px'},5000,function(){
      $('.galery_move a:first').detach().appendTo('.galery_move');
      $('.galery_move').css('left','0px');
    });
});

setInterval(function() {$('.right').click();}, 000);
});

