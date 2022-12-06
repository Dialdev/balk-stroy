<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<?php 
		if((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443){
			$protocol = 'https://';
		}else{
			$protocol = 'http://';
		}
		//$request = $_SERVER['REQUEST_URI'];
		//if (mb_strpos($request , '/articles') == 0) {
		//	$url = $protocol.$_SERVER['SERVER_NAME'].'/articles/';
		//	echo '<link rel="canonical" href="'.$url.'"/>';
		//}
		//if (str_contains($request , '/articles')) {echo '123';}
		/*if (str_contains($request , '/articles')) {
			echo '<link rel="canonical" href="'.$url.'"/>';
		}
		
		if (str_contains($request , '/articles')) {
			$url = $protocol.$_SERVER['SERVER_NAME'].'/articles/';
			echo '<link rel="canonical" href="'.$url.'"/>';
		}
*/
	?> 
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="google-site-verification" content="CzHJnsVqVDmxjJaD1-m0R_LC9Zb6YvBn7EkHRQcLjqM" />
    <meta name="google-site-verification" content="CzHJnsVqVDmxjJaD1-m0R_LC9Zb6YvBn7EkHRQcLjqM" />
    <?php
    if (is_category(1)){?>
    <meta name="description" content="Новости компании БалкСтрой. Будьте в курсе!" />
    <?} elseif (is_category(2)){?>
    <meta name="description" content="Отзывы о монтаже балконов компанией БалкСтрой." />
     <?}
    elseif (is_category(4)){?>
    <meta name="description" content="Доступная стоимость и высокое качество выполняемых работ по отделке, ремонту и остеклению балконов и лоджий в Туле от компании «БалкСтрой»" />
     <?}?>
  
    <?php if(is_category(4)){
        echo "<title>Услуги по отделке, ремонту и остеклению балконов и лоджий в Туле</title>";
    }
    else {?><title><?php wp_title( '|', true, 'right' ); ?></title> <?}?>
    
	<link rel="profile" href="http://gmpg.org/xfn/11">
   
<link rel="icon" type="image/png" sizes="128x128" href="/favicon.png" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script  src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
    <!--script src='/snow.js'></script>

<script>
var aaSnowConfig = {snowflakes: '600'};
</script-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/fancybox3/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/fancybox3/jquery.fancybox.min.css">
    <script  src="<?php echo get_template_directory_uri(); ?>/js/jquery.inputmask.js"></script>
<script>

$(function(){
/*$('#wrapping input[name="phone"]').inputmask("+7 (999) 999-99-99");*/

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

</script>

</head>

<body <?php body_class(); ?>>

<div class="modal_form" style="display:none;">
	<div id="modal_forms" class="modal-form__overlay"></div>
	<div class="modal-form__wrap">
	<div class="form_x">X</div>
	<span class="modal_form__title">Оставить заявку</span>
	<?php echo do_shortcode( '[contact-form-7 id="1130" title="Записаться на замер"]' ); ?>	
	</div>
</div>



<div class="bdout">
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
			<!--img src="/wp-admin/images/elka.png" class="ny2016" alt="#" style="display:block;"-->
			<a class="lg" href="<?php if( is_front_page() ){echo "javascript:void(0);";} else {echo "/";} ?>">БалкСтрой<span class="lgsp">ОСТЕКЛЕНИЕ БАЛКОНОВ</span><span class="lgsp2">Квалифицированный подход любой сложности</span></a>
            <div class="tpphn"><a href="tel:+74872581400">+7 (4872) 58-14-00</a><a href="tel:+79521876044">+7 (952) 187-60-44</a>
<span style="
font-size: 9px; font-weight: 700;
">
режим работы :  пн. - сб. 9.00 - 18.00,  вс. - выходной
</span>
<span style="font-size: 9px; font-weight: 700;">адрес : г. Тула, ул. Путейская, 11</span>
</div>
            <div class="mk modal">Оставить заявку</div>
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">

				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</nav>
            <script>
                $("#menu-topmenu a").eq(6).css({"padding":"0px 23px"});
            </script>             
	</header><!-- #masthead -->

	<div id="main" class="site-main" <?if ( is_front_page()) {}else{?>style="padding:0 0 50px;"<?}?>>
    
