<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
<div class="breadcrumb"  itemscope itemtype="https://schema.org/BreadcrumbList">
<?php $str=category_description(); if(!empty($str)){echo apply_filters("the_content", $str);}?>
<?php
$cat=9;
$pcat = wp_get_post_categories( $post->ID );
if(in_array($cat, $pcat) and is_single()){ ?>
Здесь пишем нужный текст
<?php
}
?>
<?php if(is_category(4)){?>

    <span typeof="v:Breadcrumb" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a rel="v:url" property="v:title" title="Перейти на главную" itemscope itemtype="https://schema.org/Thing" itemprop="item"  href="https://xn-----6kcdht5aheqk6cn1i.xn--p1ai" class="home"> <span itemprop="name">Главная</span></a>
    </span> &gt; 
    <span typeof="v:Breadcrumb" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span property="v:title" itemprop="name">Услуги</span>
    </span>
<?}?>

<?php if(!is_category(4)){
if(function_exists('bcn_display'))
{
 bcn_display();
}
}?>
</div>

			<?php if ( have_posts() ) : ?>

			<header class="entry-header">
	<?if	(!is_category(4)){?>	   <h1 ><?php printf( __( '%s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1><?}?>	

			<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) && !is_category(7)) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->


   
   
   <?
 if(is_category('Отзывы')){  

                    // Start the Loop.
                    while ( have_posts() ) : the_post();

                    /*
                     * Include the post format-specific template for the content. If you want to
                     * use this in a child theme, then include a file called called content-___.php
                     * (where ___ is the post format) and that will be used instead.
                     */
                    get_template_part( 'content3', get_post_format() );

                    endwhile;
                    // Previous/next page navigation.
                    twentyfourteen_paging_nav();


     
   
   if($_GET["send"]=="ok"){?>
            <a name="ok"></a><h2 style="margin: 0 0 40px;">Спасибо за отзыв! Ваш отзыв появится после модерации.</h2>
        <?}else{?>


<h2>Оставьте свой отзыв</h2>
    <?
    ob_start();
        session_start();
    $string = '';
        for ($i = 0; $i < 5; $i++) {
            $string .= chr(rand(97, 122));
        }
        $_SESSION['rootpath'] = str_replace('/wp-content/themes', '', get_theme_root()) .'/wp-blog-header.php';
        $_SESSION['random_code'] = $string;
        ?>
                        
                        
<form id="ttgps-form" action="/wp-content/plugins/tt-guest-post-submit/tt-guest-post-submit-submit.php" method="post" enctype="multipart/form-data">
                            <div id="wrapping" class="clearfix" style="margin:0 40px 40px;">
                                <section id="aligned">
                                        <input  type="text" class="txtinput" style="width: 100%;" id="title" name="title" title="Пожалуйста представтесь" x-moz-errormessage="Введите ваше имя" size="72" required="required" placeholder="Пожалуйста представтесь">
                                        <?wp_nonce_field()?>
                                        <textarea class="txtblock" name="content" style="width: 100%;" title="Ваше сообщение" x-moz-errormessage="Введите текст" rows="5" cols="72" required="required" placeholder="Ваше сообщение"></textarea>      
                                        <input type="email" class="txtinput" style="width: 100%;" title="Ваш e-mail" x-moz-errormessage="Введите ваш e-mail" id="email" name="email" size="72" placeholder="Ваш e-mail">
                                        <input type="phone" class="txtinput" style="width: 100%;" title="Ваш номер телефона" x-moz-errormessage="Введите номер телефона" id="phone" name="phone" size="72" required="required" placeholder="Ваш номер телефона">
                                        <input name="category" value="2" type="hidden">
                                        <img id="captcha-code" src="/wp-content/plugins/tt-guest-post-submit/captcha.php" />
                                        <input type="text" class="txtinput" style="width:150px;margin: 34px 0 0;" title="Введите символы" x-moz-errormessage="Введите символы" id="code" name="code" size="30" pattern="<?=$_SESSION['random_code']?>" required="required" placeholder="Введите символы">
                                        <input type="hidden" value="1" name="authorid">
                                        <input type="hidden" value="<?=$_SERVER["REQUEST_URI"]?>" name="redirect_url">
                                    <p><input type="checkbox" required="required" name="just" value="согласен с правилами обработки персональных данных" checked>Согласен с правилами обработки персональных данных установленными в <a style="color: black;" target="_blank" href="/wp-content/themes/twentyfourteen/privacy-policy.pdf">политике конфиденциальности</a></p></section>
                                <section id="buttons">
                                        <input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="ОТПРАВИТЬ">
                                </section>
                            </div>
                        </form>

                        
<?}
 
 }
 elseif(is_category(4)){?>
<h1>Услуги</h1>



<section class="service">
    <a href="/remont-balkonov/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads//service-image/1.png" alt="Ремонт балконов">
        </span>
        <span class="service__overlay">
            <span class="service__title">Ремонт балконов</span>
            <span class="service__description">Обустроим красивое, стильное и практичное пространство различного назначения</span>
            <span class="service__price">от 30 000 ₽</span>
        </span>
    </a>
    <a href="/remont-lodzhiy/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/2.png" alt="Ремонт лоджий">
        </span>
        <span class="service__overlay">
            <span class="service__title">Ремонт лоджий</span>
            <span class="service__description">Выполним быстро и качественно ремонт лоджий под ключ любой категории сложности и объема по доступным ценам.</span>
            <span class="service__price">от 15 000 ₽</span>
        </span>
    </a>
    <a href="/osteklenie-balkonov/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/3.png" alt="Остекление балконов и лоджий">
        </span>
        <span class="service__overlay">
            <span class="service__title">Остекление балконов и лоджий</span>
            <span class="service__description"></span>
            <span class="service__price">от 20 000 ₽</span>
        </span>
    </a>
    <a href="/otdelka-balkonov/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/4.png" alt="Внутренняя и наружная отделка балкона">
        </span>
        <span class="service__overlay">
            <span class="service__title">Внутренняя и наружная отделка балкона</span>
            <span class="service__description"></span>
            <span class="service__price">от 48 000 ₽</span>
        </span>
    </a>
    <a href="/evrobalkon-otdelka-i-osteklenie/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/5.png" alt="Евробалконы">
        </span>
        <span class="service__overlay">
            <span class="service__title">Евробалконы</span>
            <span class="service__description"></span>
            <span class="service__price">от 67 000 ₽</span>
        </span>
    </a>
    <a href="/montazh-kryshi-balkona/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/6.png" alt="Монтаж крыши балкона">
        </span>
        <span class="service__overlay">
            <span class="service__title">Монтаж крыши балкона</span>
            <span class="service__description"></span>
            <span class="service__price">от 5 000 ₽</span>
        </span>
    </a>
    <a href="/uvelichenie-poleznoj-ploshhadi-balkona/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/7.png" alt="Увеличение полезной площади балкона">
        </span>
        <span class="service__overlay">
            <span class="service__title">Увеличение полезной площади балкона</span>
            <span class="service__description"></span>
            <span class="service__price">от 20 000 ₽</span>
        </span>
    </a>
    <a href="/usilenie-balkonnoj-plity/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/8.png" alt="Усиление балконной плиты">
        </span>
        <span class="service__overlay">
            <span class="service__title">Усиление балконной плиты</span>
            <span class="service__description"></span>
            <span class="service__price">от 25 000 ₽</span>
        </span>
    </a>
    <a href="/electromontazh/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/9.png" alt="Электромонтаж">
        </span>
        <span class="service__overlay">
            <span class="service__title">Электромонтаж</span>
            <span class="service__description"></span>
            <span class="service__price">от 300 ₽</span>
        </span>
    </a>
    <a href="/services/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/10.png" alt="Замер">
        </span>
        <span class="service__overlay">
            <span class="service__title">Замер</span>
            <span class="service__description"></span>
            <span class="service__price"> </span>
        </span>
    </a>
    <a href="/liana-dlya-sushki-belya/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/11.png" alt="Лиана для сушки белья">
        </span>
        <span class="service__overlay">
            <span class="service__title">Лиана для сушки белья</span>
            <span class="service__description"></span>
            <span class="service__price">от 2 000 ₽</span>
        </span>
    </a>
    <a href="/shkafy-i-tumbochki/" class="service_item">
        <span class="service__image">
            <img src="/wp-content/uploads/service-image/12.png" alt=" Шкафы и тумбочки">
        </span>
        <span class="service__overlay">
            <span class="service__title">Шкафы и тумбочки</span>
            <span class="service__description"></span>
            <span class="service__price">от 5 000 ₽</span>
        </span>
    </a>
</section>
<!-- <div class="mnsrv">

            <div class="rwsmnin" >
            <a class="rwsmna " rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/remont-balkonov/">
            <img width="93" height="72" alt="balcon_icon" class="attachment-post-thumbnail wp-post-image" src="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/wp-content/uploads/2014/12/balcon_icon.png"><br>
            Ремонт балконов          </a>
        </div>
                <div class="rwsmnin">
            <a class="rwsmna" rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/remont-lodzhiy/">
            <img width="93" height="76" alt="balcon_icon11." class="attachment-post-thumbnail wp-post-image" src="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/wp-content/uploads/2015/07/balcon_icon112.png"><br>
            Ремонт лоджий            </a>
        </div>
                <div class="rwsmnin">
            <a class="rwsmna" rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/osteklenie-balkonov/">
            <img width="93" height="72" alt="balcon_icon2" class="attachment-post-thumbnail wp-post-image" src="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/wp-content/uploads/2014/12/balcon_icon2.png"><br>
            Остекление балконов и лоджий      </a>
        </div> -->
                <!--div class="rwsmnin" style="margin-right: 0px;">
            <a class="rwsmna" rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/osteklenie-lodzhiy/">
            <img width="93" height="72" alt="balcon_icon155" class="attachment-post-thumbnail wp-post-image" src="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/wp-content/uploads/2015/08/balcon_icon155.png"><br>
            Остекление лоджий            </a>
        </div-->
        <!-- <div class="rwsmnin">
            <a class="rwsmna" rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/otdelka-balkonov/">
            <img width="93" height="72" alt="srv03" class="attachment-post-thumbnail wp-post-image" src="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/wp-content/uploads/2014/04/srv03.png"><br>
            Внутренняя и наружная отделка балкона            </a>
        </div>
		<div class="rwsmnin">
            <a class="rwsmna" rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/evrobalkon-otdelka-i-osteklenie/">
            <img width="93" height="72" alt="euro" class="attachment-post-thumbnail wp-post-image" src="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/wp-content/uploads/2015/02/euro.png"><br>
            Евробалконы           </a>
        </div>
        <div class="rwsmnin">
            <a class="rwsmna" rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/montazh-kryshi-balkona/">
            <img width="90" height="96" alt="srv04" class="attachment-post-thumbnail wp-post-image" src="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/wp-content/uploads/2014/04/srv04.png"><br>
            Монтаж крыши балкона            </a>
        </div>
                    <div class="rwsmnin" style="margin-right: 0px;">
            <a class="rwsmna" rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/uvelichenie-poleznoj-ploshhadi-balkona/">
            <img width="118" height="97" alt="srv02" class="attachment-post-thumbnail wp-post-image" src="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/wp-content/uploads/2014/05/srv02.png"><br>
            Увеличение полезной площади балкона            </a>
        </div>
                <div class="rwsmnin">
            <a class="rwsmna" rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/usilenie-balkonnoj-plity/">
            <img width="150" height="96" alt="srv01" class="attachment-post-thumbnail wp-post-image" src="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/wp-content/uploads/2014/04/srv01-e1399451207934.png"><br>
            Усиление балконной плиты            </a>
        </div>
                <div class="rwsmnin">
            <a class="rwsmna" rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/electromontazh/">
            <img width="66" height="96" alt="srv08" class="attachment-post-thumbnail wp-post-image" src="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/wp-content/uploads/2014/04/srv08.png"><br>
            Электромонтаж            </a>
        </div>
                <div class="rwsmnin">
            <a class="rwsmna" rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/services/">
            <img width="105" height="96" alt="srv07" class="attachment-post-thumbnail wp-post-image" src="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/wp-content/uploads/2014/04/srv07.png"><br>
            Замер, доставка  и демонтаж бесплатно в удобное для Вас время            </a>
        </div> -->
                <!--div class="rwsmnin">
            <a class="rwsmna" rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/liana-dlya-sushki-belya/">
            <img width="79" height="96" alt="srv06" class="attachment-post-thumbnail wp-post-image" src="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/wp-content/uploads/2014/04/srv06.png"><br>
            Лиана для сушки белья            </a>
        </div>
                <div class="rwsmnin">
            <a class="rwsmna" rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/shkafy-i-tumbochki/">
            <img width="66" height="96" alt="srv05" class="attachment-post-thumbnail wp-post-image" src="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/wp-content/uploads/2014/04/srv05.png"><br>
            Шкафы и тумбочки            </a>
        </div-->                
           
                     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(function(){
$(".rwsmnin").eq(3).css({"margin-right":"0px"});
$(".rwsmnin").eq(7).css({"margin-right":"0px"});
var focusOnce = 1;
$( ".divmn input, .divmn textarea" ).focus(function() {
    if (focusOnce == 1){
            console.log(1);
           $("#phone").after('<input type="submit" name="submit" id="submitbtn" class="mnsubmitbtn" tabindex="7" value="ОТПРАВИТЬ"/>');
           focusOnce='';
    }           
});
});


</script>  
<!-- </div> -->

<?}

else{
         // Start the Loop.
                    while ( have_posts() ) : the_post();

                    /*
                     * Include the post format-specific template for the content. If you want to
                     * use this in a child theme, then include a file called called content-___.php
                     * (where ___ is the post format) and that will be used instead.
                     */
                    get_template_part( 'content2', get_post_format() );

                    endwhile;
                    // Previous/next page navigation.
                    twentyfourteen_paging_nav();
					

               
     
     
     
     
 }
              else :
                    // If no content, include the "No posts found" template.
                    get_template_part( 'content2', 'none' );

                endif;
 
 ?>
   

		</div><!-- #content -->
	</section><!-- #primary -->

    <?php if ( is_page('9') ) { ?>
 
 <p>shdsghds</p>

<?php } ?>

<?php


get_footer();
