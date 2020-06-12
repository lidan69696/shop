<section class="category">
	<?php foreach ($res as $key => $val): ?>
		
		<?php if ($id == $val[category]): ?>
			<div class="product">
				<p class="name_product"><?=$val[name]?></p>
				<img src="<?=$val[img]?>" alt="">
				<p class="title"><?=$val[title]?></p>
				<p class="cost"><?=$val[cost]?></p>
				<button class="in_cart">В корзину</button>
			</div>
		<?php endif ?>
		
	<?php endforeach ?>
</section>