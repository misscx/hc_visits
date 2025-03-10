<?php
/*
Plugin Name: 访问量统计
Version: 1.0.0
Plugin URL: https://www.emlog.net
Description: 访问量统计，用于展示网站的点击量。
Author: 寒川
Author URL: https://www.emlog.net
*/

defined('EMLOG_ROOT') || exit('access denied!');

function hc_visits(){
    $plugin_storage = Storage::getInstance('hc_visits');
    $visits = $plugin_storage->getValue('visits');
    $plugin_storage->setValue('visits', $visits+1 , 'number');
    echo '点击量：'.$visits.'次';    
}
addAction('index_footer','hc_visits');