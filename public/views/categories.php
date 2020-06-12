<section class="categories">
	<?php foreach ($res as $key => $val): ?>
		
		<div class="category_item">
			<a href="categories/category/<?=$val[id_categories]?>">
				<img src="<?=$val[img]?>" alt="">
				<p class="name_category"><?=$val[name]?></p>
			</a>
		</div>
		
	<?php endforeach ?>
</section>