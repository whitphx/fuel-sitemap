<?php

Autoloader::add_core_namespace('Sitemap');

Autoloader::add_classes(array(
	'Sitemap\\Module'             => __DIR__.'/classes/module.php',
	'Sitemap\\Controller'         => __DIR__.'/classes/controller.php',
	'Sitemap\\Action'             => __DIR__.'/classes/action.php',
));
