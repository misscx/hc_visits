<?php
defined('EMLOG_ROOT') || exit('access denied!');

function callback_init() {
    $plugin_storage = Storage::getInstance('hc_visits');
    $plugin_storage->setValue('visits', 0 , 'number');
}

function callback_rm() {
    $plugin_storage = Storage::getInstance('hc_visits');
	$plugin_storage->deleteAllName('YES');
}

function callback_up() {
    // do something
}
