<?php
/*
 * define APP_NAME and APP_URL in bootstrap.php
 */
$app_url  = defined('APP_URL') ? APP_URL : Router::url('/', true);
$app_name = defined('APP_NAME') ? APP_NAME : parse_url($app_url, PHP_URL_HOST);

?>
<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="<?php echo $app_url; ?>"><?php echo __($app_name); ?></a>
			<div class="nav-collapse">
				<ul class="nav">
					<?php //Fill me with your sweet, sweet menu items. ?>
				</ul>
			</div>
		</div>
	</div>
</div>
