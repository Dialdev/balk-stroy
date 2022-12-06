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



<div id="respond">
<? if (!is_page(1058)) { ?>
	<h3 class="commenth"><span><?php comment_form_title( 'Задать вопрос', 'Ответ пользователю %s' ); ?></span></h3>
	<div class="cancel-comment-reply">
		<small><?php cancel_comment_reply_link( 'Отменить ответ' ); ?></small>
	</div>
<? } else { ?>
	<h3 class="commenth"><span><?php comment_form_title( 'Оставить отзыв'); ?></span></h3>
<? } ?>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="review_form">

<?php if ( $user_ID ) : ?>

<p>Вы вошли как <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Выйти &raquo;</a></p>

<?php else : ?>

<div class="input_field">
<label for="author">Имя<?php if ($req) echo "*"; ?></label>
<input placeholder="Имя" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email">Email<?php if ($req) echo "*"; ?></label>
<input placeholder="Email" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
</div>

<!--p><label for="url">Ваш веб сайт (Если есть)</label>
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
</p>-->

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p>
<textarea class="faq__comment" name="comment" id="comment" cols="100%" rows="10" tabindex="4" placeholder="Задать вопрос..."></textarea>
</p>

<?php do_action('comment_form', $post->ID); ?>
<?php do_action( 'comment_form_after_fields', $post->ID ); ?>

<p>
	<p>
		<input type="checkbox" required="required" name="just" value="согласен с правилами обработки персональных данных" checked="checked">Согласен с 	правилами обработки персональных данных установленными в <a style="color: black;" target="_blank" href="/wp-content/themes/twentyfourteen/	privacy-policy.pdf">политике конфиденциальности</a>
	</p>
	<input class="faq__submit" name="submit" type="submit" id="submit" tabindex="5" value="Отправить" onclick=" ga('send', 'event', 'question', 'click');return true;"/>
    <?php comment_id_fields(); ?>
</p>


</form>

<?php endif; ?>
</div>

<?php echo do_shortcode( '[contact-form-7 id="1439" title="ОСТАВИТЬ ОТЗЫВ"]' ); ?>

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













