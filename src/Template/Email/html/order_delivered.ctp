<?php

use Cake\Core\Configure;

$this->Tplparser->setTheme(Configure::read('App.theme'));
$shipping_address = json_decode($order->shipping_address);

$template_path = $this->Tplparser->compile("email/order_delivered.tpl");
if ($template_path === false) $template_path = "__default/order_delivered.ctp";

include_once $template_path;



?>