<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?
if($_SERVER[‘REQUEST_URI’] == "/index.php") {

header("Location: /",TRUE,301);
exit();
}
?>
<div class="brn">
<!-- /page-templates/full-width -->

<?if($_GET["send"]=="ok"){?>
            <div class="divmn">
                <div class="divmnhd">СПАСИБО ЗА ЗАЯВКУ!<br/>В ближайшее время мы с вами свяжемся.</div>
            </div>
            <script>
                $('.modal_form').css("display","block");
            </script>
        <?}else{?>

<?
session_start();
$_SESSION['rootpath'] = '/home/b/balkstroy/public_html/wp-blog-header.php';



?>

<div class="balkon"  style="display:none">
<div class="divmnhd">ОСТАВЬТЕ ЗАЯВКУ НА ОСТЕКЛЕНИЕ БАЛКОНА</div>
<?php echo do_shortcode( '[contact-form-7 id="1258" title="ЗАЯВКА НА ОСТЕКЛЕНИЕ БАЛКОНА"]' ); ?>	
</div>
                    <?/* Форма переделана на Contact Form 7?>
                        <form id="ttgpsform" name="ttgpsform" action="/wp-content/plugins/tt-guest-post-submit/tt-guest-post-submit.php" method="post" enctype="multipart/form-data" >
                            <div class="divmn">
                            <div class="divmnhd">ОСТАВЬТЕ ЗАЯВКУ НА ОСТЕКЛЕНИЕ БАЛКОНА</div>
                                <input type="text" class="mninput" id="title" name="title" title="Пожалуйста представтесь" size="72" required="required" placeholder="Ваше Имя*">
                                <?wp_nonce_field()?>
                              <!--  <input type="email" class="mninput" title="Ваш e-mail" x-moz-errormessage="Введите ваш e-mail" id="email" name="email" size="72"  placeholder="Ваш e-mail"-->
							  <!-- <textarea class="mntxt" name="content" title="Ваше сообщение" x-moz-errormessage="Введите текст" id="mntxt" rows="2" cols="3" required="required" placeholder="Ваше сообщение*"></textarea-->
                                <input name="category" value="5" type="hidden">
                                <input type="tel" class="mninput" title="Ваш номер телефона" id="phone" name="phone" size="72" required="required" placeholder="Ваш номер телефона*">
                                <p class="sogl"><input type="checkbox" required="required" name="just" value="согласен с правилами обработки персональных данных" checked="checked">*Согласен с правилами обработки персональных данных установленными в <a style="color: black;" target="_blank" href="/wp-content/themes/twentyfourteen/privacy-policy.pdf">политике конфиденциальности</a></p>
                                <input type="hidden" value="/" name="redirect_url">
                            </div>
                        </form>
                    <?*/?>    
<?}?>
                
</div>
<br><p class="kredit">Наша компания предоставляет рассрочку 0% и <a href="/zayavka/">кредит</a></p>

<section class="service">
    <a href="/remont-balkonov/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads//service-image/1.webp" alt="Ремонт балконов">
        </span>
        <span class="service__overlay">
            <span class="service__title">Ремонт балконов</span>
            <span class="service__description">Обустроим красивое, стильное и практичное пространство различного назначения</span>
            <span class="service__price">от 30 000 ₽</span>
        </span>
    </a>
    <a href="/remont-lodzhiy/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/2.webp" alt="Ремонт лоджий">
        </span>
        <span class="service__overlay">
            <span class="service__title">Ремонт лоджий</span>
            <span class="service__description"></span>
            <span class="service__price">от 15 000 ₽</span>
        </span>
    </a>
    <a href="/osteklenie-balkonov/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/3.webp" alt="Остекление балконов и лоджий">
        </span>
        <span class="service__overlay">
            <span class="service__title">Остекление балконов и лоджий</span>
            <span class="service__description"></span>
            <span class="service__price">от 20 000 ₽</span>
        </span>
    </a>
    <a href="/otdelka-balkonov/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/4.webp" alt="Внутренняя и наружная отделка">
        </span>
        <span class="service__overlay">
            <span class="service__title">Внутренняя и наружная отделка</span>
            <span class="service__description"></span>
            <span class="service__price">от 48 000 ₽</span>
        </span>
    </a>
    <a href="/evrobalkon-otdelka-i-osteklenie/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/5.webp" alt="Евробалконы">
        </span>
        <span class="service__overlay">
            <span class="service__title">Евробалконы</span>
            <span class="service__description"></span>
            <span class="service__price">от 67 000 ₽</span>
        </span>
    </a>
    <a href="/montazh-kryshi-balkona/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/6.webp" alt="Монтаж крыши">
        </span>
        <span class="service__overlay">
            <span class="service__title">Монтаж крыши</span>
            <span class="service__description"></span>
            <span class="service__price">от 5 000 ₽</span>
        </span>
    </a>
    <a href="/uvelichenie-poleznoj-ploshhadi-balkona/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/7.webp" alt="Увеличение полезной площади">
        </span>
        <span class="service__overlay">
            <span class="service__title">Увеличение полезной площади</span>
            <span class="service__description"></span>
            <span class="service__price">от 20 000 ₽</span>
        </span>
    </a>
    <a href="/usilenie-balkonnoj-plity/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/8.webp" alt="Усиление балконной плиты">
        </span>
        <span class="service__overlay">
            <span class="service__title">Усиление балконной плиты</span>
            <span class="service__description"></span>
            <span class="service__price">от 25 000 ₽</span>
        </span>
    </a>
    <a href="/electromontazh/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/9.webp" alt="Электромонтаж">
        </span>
        <span class="service__overlay">
            <span class="service__title">Электромонтаж</span>
            <span class="service__description"></span>
            <span class="service__price">от 300 ₽</span>
        </span>
    </a>
    <a href="/services/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/10.webp" alt="Замер">
        </span>
        <span class="service__overlay">
            <span class="service__title">Замер</span>
            <span class="service__description"></span>
            <span class="service__price"> </span>
        </span>
    </a>
    <a href="/liana-dlya-sushki-belya/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/11.webp" alt="Лиана для сушки белья">
        </span>
        <span class="service__overlay">
            <span class="service__title">Лиана для сушки белья</span>
            <span class="service__description"></span>
            <span class="service__price">от 2 000 ₽</span>
        </span>
    </a>
    <a href="/shkafy-i-tumbochki/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/12.webp" alt=" Шкафы и тумбочки">
        </span>
        <span class="service__overlay">
            <span class="service__title">Шкафы и тумбочки</span>
            <span class="service__description"></span>
            <span class="service__price">от 5 000 ₽</span>
        </span>
    </a>
</section>

<!-- Slider -->
<div class="entry-content">

<div class="partners">
    <h2>Наши работы</h2>
    <div class="prt_arrow" id="prt_arrow_left"></div>
    <div class="prt_arrow" id="prt_arrow_right"></div>
    <div id="prt_ovh">
        <div id="prt_move" style="left: 0px;">
            <a data-fancybox rel="index" class="partner" href="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/IMG_20161019_202949.webp">
                <img src="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/IMG_20161019_202949.webp" title="" alt="IMG_20161019_202949">
            </a>			
            <a data-fancybox rel="index" class="partner" href="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/WP_20161025_11_13_32_Pro.webp">
                <img src="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/WP_20161025_11_13_32_Pro.webp" title="" alt="WP_20161025_11_13_32_Pro">
            </a>		
            <a data-fancybox rel="index" class="partner" href="/wp-content/uploads/photo-gallery/%D0%B2%D0%BD%D1%83%D1%82%D1%80%D0%B5%D0%BD%D0%BD%D1%8F%D1%8F%20%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%D0%BA%D0%B0/16/1/IMG_20161019_202949.webp">
                <img src="/wp-content/uploads/photo-gallery/%D0%B2%D0%BD%D1%83%D1%82%D1%80%D0%B5%D0%BD%D0%BD%D1%8F%D1%8F%20%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%D0%BA%D0%B0/16/1/IMG_20161019_202949.webp" title="" alt="">
            </a>			
            <a data-fancybox rel="index" class="partner" href="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/WP_20161025_11_13_29_Pro.webp">
                <img src="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/WP_20161025_11_13_29_Pro.webp" title="" alt="IMG_20161019_202949">
            </a>			
            <a data-fancybox rel="index" class="partner" href="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/IMG_20161016_142329.webp">
                <img src="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/IMG_20161016_142329.webp" title="" alt="IMG_20161016_142329">
            </a>					
            <a data-fancybox rel="index" class="partner" href="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/WP_20161025_11_13_21_Pro.webp">
                <img src="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/WP_20161025_11_13_21_Pro.webp" title="" alt="WP_20161025_11_13_21_Pro">
            </a>			
            <a data-fancybox rel="index" class="partner" href="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/IMG_20160921_190003.webp">
                <img src="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/IMG_20160921_190003.webp" title="" alt="IMG_20160921_190003">
            </a>					
            <a data-fancybox rel="index" class="partner" href="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/WP_20161025_11_13_08_Pro.webp">
                <img src="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/WP_20161025_11_13_08_Pro.webp" title="" alt="WP_20161025_11_13_08_Pro"></a>			
            <a data-fancybox rel="index" class="partner" href="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/IMG_20160918_151241.webp">
                <img src="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/IMG_20160918_151241.webp" title="" alt="IMG_20160918_151241">
            </a>						
            <a data-fancybox rel="index" class="partner" href="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/WP_20161001_14_37_47_Pro.webp">
                <img src="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/WP_20161001_14_37_47_Pro.webp" title="" alt="WP_20161001_14_37_47_Pro">
            </a>			
            <a data-fancybox rel="index" class="partner" href="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/DSCN3420.webp">
                <img src="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/DSCN3420.webp" title="" alt="DSCN3420">
            </a>			
            <a data-fancybox rel="index" class="partner" href="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/WP_20161001_14_26_41_Pro.webp">
                <img src="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/WP_20161001_14_26_41_Pro.webp" title="" alt="WP_20161001_14_26_41_Pro">
            </a>
            <a data-fancybox rel="index" class="partner" href="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/DSCN3416.webp">
                <img src="/wp-content/uploads/photo-gallery/внутренняя%20отделка/16/DSCN3416.webp" title="" alt="DSCN3416">
            </a>		
            <a data-fancybox rel="index" class="partner" href="wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/WP_20161001_14_26_01_Pro.webp">
                <img src="wp-content/uploads/photo-gallery/внутренняя%20отделка/16/1/WP_20161001_14_26_01_Pro.webp" title="" alt="WP_20161001_14_26_01_Pro">
            </a>		
        </div>
    </div>
</div>

</div>
<p></p>
<!-- Slider End -->


		
           
                     <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
<script>

$(function(){

    $(".rwsmnin").eq(3).css({"margin-right":"0px"});
    $(".rwsmnin").eq(7).css({"margin-right":"0px"});

    var focusOnce = 1;

    $( ".divmn input, .divmn textarea" ).focus(function() {
        if (focusOnce == 1){
               $("p.sogl").after('<input type="submit" name="submit" id="submitbtn" class="mnsubmitbtn" tabindex="7" value="ОТПРАВИТЬ"/>');
               focusOnce='';
        }           
    });
});

</script>  
             </div>
<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->



<?php

get_footer();
