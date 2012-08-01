<?php

/**
 * Postmark Email Delivery library for Fuel
 *
 * @package		Spreedly
 * @version		1.0
 * @author		https://github.com/lehresman
 * @author      Dan Matthews (dan@danmatthews.me)
 * @link		https://github.com/danmatthews/spreedly-php
 * 
 */


Autoloader::add_classes(array(
	'Mandrill' => __DIR__.'/classes/Mandrill.php',
	'Mandrill_Messages' => __DIR__.'/classes/MandrillMessages.php',
));
