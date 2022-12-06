<?php

// Здесь ничего не удаляйте
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- Редактировать можете начать здесь :) -->

</div></div></div></div></div> <!-- Разрыв контента для страницы "О компании" - Вывод Схемы работы -->
<?if( is_page('about-company') ) {?>
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
	<?}?>
<!-- Окончание вывода Схемы работы -->
<!-- Повторное открытие контента для других страниц - начало -->
<div class="bdout">
	<div id="page" class="hfeed site">
		<div id="main" class="site-main" style="padding:0 0 170px">
		<div id="main-content" class="main-content">
			<div id="primary" class="content-area">
<!-- Повторное открытие контента для других страниц - окончание -->


<div class="test123" >
<?php echo do_shortcode( '[contact-form-7 id="1657" title="Обратка_copy"]' ); ?>
</div>


<?php if ( have_comments() ) { 
	if (!is_page(1058)) {
		echo '<a href="#respond" class="addComment">Добавить отзыв</a>';
	} else {
	echo '';
	} ?>
	<ul class="commentlist">
	<?/*the_date()*/?>
	<?php wp_list_comments('callback=mytheme_comment'); ?>
	</ul>
	
 <?php }/*
	else {  ?>

	<?php if ('open' == $post->comment_status) { 
			if (!is_page(1058)) {
				echo '<p class="nocomments">Отзывов нет.</p>';
			} else {
				echo '';
			} ?>
		
	 <?php } else { ?>
		<p class="nocomments">Отзывы закрыты.</p>

	<?php } 
	} */?>

<?php if ('open' == $post->comment_status) : ?>




<?php endif; ?>













