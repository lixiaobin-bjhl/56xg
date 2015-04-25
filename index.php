<?php

/**
 * File 我乐孝感主页
 */

require('./include/common.php');

$today = date("Y-m-d");

/**
 * 查询当天的热点词是否存在
 * @param  [DB]  $db    
 * @param  [string] $today 
 * @return boolean       
 */
function is_exist_today_hot_word($db, $today) {
    return $db->getRowsNum('SELECT * from hot_word where time="' . $today . '"');
}

/**
 * 查询当天的热点词
 * @param  [DB]  $db    
 * @param  [string]  $today 
 * @return Array       
 */
function get_today_hot_word($db, $today) {
    return $db->getRowsRst('SELECT content from hot_word where time="' . $today . '"', MYSQL_ASSOC);
}

/**
 * 获取今天的热点词，插入数据库
 * @param  [type] $db    
 * @param  [type] $today 
 * @return [type] 
 */
function insert_today_hot_word($db, $today) {
    $ret = file_get_html('http://www.baidu.com/s?wd=%E5%AD%9D%E6%84%9F&ie=utf-8&cl=3&t=12&fr=news');
    $hot_words = array();
    foreach ($ret->find('#rs a') as $element) {
        array_push($hot_words, $element->innertext);
    }
    return $db->uidRst("INSERT INTO hot_word (content, time) VALUES (" . "'" . implode("," , $hot_words) . "'". "," . "'" . $today . "'" . ")");
}

if (!is_exist_today_hot_word($db, $today)) {
    insert_today_hot_word($db, $today);
    $hot_word =  get_today_hot_word($db, $today);
} else {
    $hot_word = get_today_hot_word($db, $today);
}

render('index', array(
    'tpl_data' => array(
        title => '我乐孝感',
        hot_word => explode(",", $hot_word['content'])
    )
));



