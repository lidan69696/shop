<?php 
session_start();
require 'engine/config/config.php';

define('ROOT', __DIR__);
require ROOT.'/public/views/header.php';
require ROOT.'/engine/config/Router.php';
?>
<section class="body">
	<?php 
		$router = new Router();
		$router->run();
	?>
</section>
<?php
require ROOT.'/public/views/footer.php';