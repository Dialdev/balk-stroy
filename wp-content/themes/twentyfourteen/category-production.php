 <?   get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
<div class="breadcrumb">

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
                <h1>Продукция</h1>
                <div class="production">
                        <div class="product-setcion">
                            <a class="rwsmna" rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/liana-dlya-sushki-belya/">
                            
                            <img alt="srv06" class="attachment-post-thumbnail wp-post-image" src="/wp-content/uploads/service-image/11.png"><br>
                            <span class="product_info">
                            Лиана для сушки белья   
                            </span>
                            <span class="price_product">
                            от 2 000 ₽
                                </span>
                            <span class="product__overlay">
                                 
                            </span>
                            
                           
                            </a>
                        </div>

                        <div class="product-setcion">
                                <a class="rwsmna" rel="bookmark" href="http://xn-----6kcdht5aheqk6cn1i.xn--p1ai/shkafy-i-tumbochki/">
                                <img  alt="srv05" class="attachment-post-thumbnail wp-post-image" src="/wp-content/uploads/service-image/12.png"><br>
                                <span class="product_info">
                                Шкафы и тумбочки    
                                </span>
                                <span class="price_product">
                                от 5 000 ₽
                                </span>
                                <span class="product__overlay">
                                
                                </span>
                                </a>
                        </div>  
                    </div>  

          <?php


get_footer(); ?>