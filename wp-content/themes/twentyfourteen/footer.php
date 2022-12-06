<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->
    </div><!-- #page -->
    
    
<? if ( is_front_page()) {?>    
    
<div class="vrs">ВАРИАНТЫ ОСТЕКЛЕНИЯ</div>
<div class="vrs2">
<table><tr><td style="padding:0 20px 0 0;">
<div class="nbr1">1</div>
<div class="nbrhd"><a href="/teploe-osteklenie/">ТЁПЛОЕ ОСТЕКЛЕНИЕ</a></div>
<div class="nbrann"><a href="/teploe-osteklenie/">остекление  пластиковыми окнами</a></div>
<div class="nbrann2">такое застекление гарантируется оптимальную температуру и влажность воздуха в помещении, лоджия или балкон  остануться теплыми даже зимой, профиль ПВХ долговечен и прослужит вам более 40 лет 
<br><a class="more" href="/teploe-osteklenie/">Подробнее...</a></div>
</td><td style="padding:0 0 0 20px;">
<div class="nbr1">2</div>
<div class="nbrhd"><a href="/holodnoe-osteklenie/">ХОЛОДНОЕ ОСТЕКЛЕНИЕ</a></div>
<div class="nbrann"><a href="/holodnoe-osteklenie/">значительно экономнее пластикового</a></div>
<div class="nbrann2">защищает от снега ветра дождя и пыли. Алюминиевые профили универсальны, конструкция может быть раздвижной, что очень удобно, учитывая небольшие размеры балконов, и распашные. Итальянская серия PROVEDAL
<br><a class="more" href="/holodnoe-osteklenie/">Подробнее...</a></div>

</td></tr></table>
</div>


<div class="shema__wrap">
    <div class="shema__title">СХЕМА РАБОТЫ С НАМИ</div>
    <div class="shema__contaier">
        <div class="shema__item">
            <div class="shema__image">
                <div class="image__wrap">
                    <img src="/wp-includes/images/icon/call.png" alt="">
                </div>
            </div>
            <div class="shema__info">1.Звонок или заявка</div>
        </div>
          <div class="shema__item">
            <div class="shema__image">
                <div class="image__wrap">
                    <img src="/wp-includes/images/icon/2.Лента.png" alt="">
                </div>
            </div>
            <div class="shema__info">2.Бесплатный замер</div>
        </div>
          <div class="shema__item">
            <div class="shema__image">
                <div class="image__wrap" style="padding-left: 12%;">
                    <img src="/wp-includes/images/icon/3.Договор.png" alt="">
                </div>
            </div>
            <div class="shema__info">3.Заключение договора на дому</div>
        </div>
          <div class="shema__item">
            <div class="shema__image">
                <div class="image__wrap">
                    <img src="/wp-includes/images/icon/4.Инструмент.png" alt="">
                </div>
            </div>
            <div class="shema__info">4.Выполнение работ</div>
        </div>
          <div class="shema__item">
            <div class="shema__image">
                <div class="image__wrap">
                    <img src="/wp-includes/images/icon/5.Лайк.png" alt="">
                </div>
            </div>
            <div class="shema__info">5.Сдача работы</div>
        </div>
    </div>  
</div>

<div class="vrs3">ОТЗЫВЫ</div>
<div class="vrs2">
<div class="comment_list__block swiper-container">
    <ul class="commentlist swiper-wrapper">
        <?php
        // Получаем комментарии поста с ID XXX из базы данных
        $comments = get_comments(array(
            'post_id' => 1058,        
            'status' => 'approve' // комментарии прошедшие модерацию
        ));
        // Формируем вывод списка полученных комментариев
        wp_list_comments(array(
            'per_page' => 10, // Пагинация комментариев - по 10 на страницу
            'type'    => 'comment',
            'reverse_top_level' => false, // Показываем последние комментарии в начале
            'callback' => 'balkon_comment',
            'end-callback' => 'balkon_end_comment'
        ), $comments);
        ?>
        
    </ul>

    <div class="swiper-pagination"></div>
</div>
<a href="/reviews/" class="all__reviews">Все отзывы</a>
<script >
    $(".rw2smnin").eq(2).css({"margin-right":"0px"});
    
    var swiper = new Swiper('.comment_list__block', {
      slidesPerView: 2,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  
</script>  
             <?php wp_reset_query(); ?>

        
 <?}?>   
 </div>
 
<div class="ftr">
		<div class="vrs4" role="contentinfo">
            <nav id="primary-navigation-2" class="site-navigation primary-navigation" role="navigation">
                <div class="ftr__navigation  ftr__navigation--services">
                    <p class="ftr__navigation-title">Услуги</p>
			<?php wp_nav_menu( array( 'theme_location' => 'footer_1', 'menu_class'=>'ftr__navigation-list' ) ); ?>
                </div>

               <?/* <div class="ftr__navigation  ftr__navigation--production">
                    <p class="ftr__navigation-title">Продукция</p>
		            <?php wp_nav_menu( array( 'theme_location' => 'footer_2', 'menu_class'=>'ftr__navigation-list' ) ); ?>
                </div> */?>

                <div class="ftr__navigation  ftr__navigation--sections">
                    <p class="visually-hidden">Основные разделы</p>
			        <?php wp_nav_menu( array( 'theme_location' => 'footer_3', 'menu_class'=>'ftr__navigation-list' ) ); ?>
                    <p class="visually-hidden">Карта сайта</p>
                    <a href="https://xn-----6kcdht5aheqk6cn1i.xn--p1ai/sitemap/" target="_BLANK" class="ftr__site-map">Карта сайта</a>
                </div>

                <div class="ftr__navigation  ftr__navigation--sections">

                </div>


		<?php echo do_shortcode( '[contact-form-7 id="1565" title="НАПИШИТЕ НАМ"]' ); ?>
            </nav>
<script >
$("#menu-topmenu-1 a").eq(6).css({"padding":"0px 23px"});
$("#menu-topmenu-2 a").eq(6).css({"padding":"0px 23px"});
</script>
            
		</div><!-- #colophon -->
<div class="vrs5">
    <div class="vrs5__left">
        <a class="sogl_foter" target="_blank" href="/wp-content/themes/twentyfourteen/privacy-policy.pdf">Политика конфиденциальности</a>

        <span class="copi">© <?php echo date('Y')?> БалкСтрой</span>

       <!--span class="lgsp">ОСТЕКЛЕНИЕ БАЛКОНОВ</span-->
        <span class="counter"></span>
    </div>

    <div class="tpphn">
        <div class="tpphn__phone">
            <a href="tel:+74872581400">+7 (4872) 58-14-00</a>
            <a href="tel:+79521876044">+7 (952) 187-60-44</a>
        </div>
        <span class="tpphn__info">
            <span class="tpphn__info-email">
                <a href="mailto:balkstroy@yandex.ru" class="foo__mail">balkstroy@yandex.ru</a>
            </span>
            <span>г. Тула, ул. Путейская, д. 11,</span>
            <span>Пн - Сб 9:00 - 18:00,  Вс - выходной</span>
        </span>
    </div>

    <div class="vrs5__right">
        <div class="mk modal">ЗАПИСАТЬСЯ НА ЗАМЕР</div>	
	<div class="" style="display:flex;justify-content:space-between;">
		<div class="dvlg lgsp">ОСТЕКЛЕНИЕ БАЛКОНОВ</div>	
        	<div class="dvlg">
            Сделано в <a href="http://paskal.pro/" target="_blank" rel="nofollow">paskal.pro</a>
            <a href="http://dialweb.ru" target="_blank">Продвижение сайта Digital Agency DIAL</a>
        	</div> 
	</div>	
    </div>
</div>

	<?php wp_footer(); ?>
</div>

<!-- BEGIN JIVOSITE CODE {literal} -->
<script>
(function(){ var widget_id = '0LvzQSyibg';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
  s.src = '//code.jivosite.com/script/widget/'+widget_id
    ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
  else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->

<!--noindex-->
<!-- Google.Analytics counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100701097-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- /Google.Analytics counter -->
<!-- Yandex.Metrika counter -->
<script >
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter27130058 = new Ya.Metrika({id:27130058,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/27130058" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!--/noindex-->
<div id="toTop"><span>Наверх</span></div>
<script  src="<?php echo get_template_directory_uri(); ?>/js/jquery.inputmask.js"></script>
<script>
$(document).ready(function() {
   // $('form.wpcf7-form').submit(function(){
     // if(this.action.indexOf('1130') !== -1){ 
       //     yaCounter27130058.reachGoal('ZAPIS');
         //  console.log('ZAPIS');
        //}
      //  if(this.action.indexOf('1258') !== -1){ 
        //    yaCounter27130058.reachGoal('zayavka');
          //  console.log('zayavka');
        //}
  //  });
   $('body').submit('#wpcf7-f1565-p5-o1 .wpcf7-form',function(){
      yaCounter27130058.reachGoal('vopros ');
       console.log('vopros ');
    });
	$('#wpcf7-f1130-t1-o1 > .wpcf7-form').submit(function(){
		yaCounter27130058.reachGoal('zayavka');
                console.log('zayavka');
});
$('.wpcf7 > .wpcf7-form').submit(function(){
		yaCounter27130058.reachGoal('zakazat_zvonok');
         	console.log('zakazat_zvonok');
});
});
</script>
<script>
$(function(){
  //  $("#phone").inputmask("+7 (999) 999-99-99");
    $('.tel-zamer [type="tel"]').inputmask("+7 (999) 999-99-99");
    
})
</script>
<script src='/wp-content/themes/twentyfourteen/js/calc.js'></script>
<link href="/wp-content/themes/twentyfourteen/css/calc.css" rel="stylesheet">
 
</body>
</html>