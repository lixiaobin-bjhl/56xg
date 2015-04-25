<?php /* Smarty version Smarty-3.1.19, created on 2015-02-11 12:58:44
         compiled from "/Users/lixiaobin/test/56xg/view/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1110584854c86592964bf6-45881451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '260190ba0336cfe0d89fbeac00dd8247cdc58001' => 
    array (
      0 => '/Users/lixiaobin/test/56xg/view/index.html',
      1 => 1423659519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1110584854c86592964bf6-45881451',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54c8659299e251_42913203',
  'variables' => 
  array (
    'tpl_data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c8659299e251_42913203')) {function content_54c8659299e251_42913203($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon"  type="image/x-icon" href="favicon.ico" /> 
    <title><?php echo $_smarty_tpl->tpl_vars['tpl_data']->value['title'];?>
</title>
    <meta name="description" content="我乐孝感提供孝感本地生活资讯，助孝感人民生活更幸福。" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta>   
</head>
<body><p></p><div class="container"><img src="img/logo.png" /></div><p></p><div class="jumbotron"><div class="container"><h2>我乐孝感</h2><p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.我乐孝感提供孝感本地生活资讯，助孝感人民生活更幸福。^_^。微信：lixiaobin8878</p><p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p></div></div><div class="container"><div class="row"><div class="col-md-4"><h3>孝感热点</h3><ul><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tpl_data']->value['hot_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><li><a href="http://www.baidu.com/s?wd=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" target="blank"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php } ?></ul></div><div class="col-md-4"><h3>孝感新闻</h3><ul><li>hahaha</li><li>hahaha</li><li>hahaha</li><li>hahaha</li></ul></div><div class="col-md-4"><h3>招聘信息</h3><ul><li>hahaha</li><li>hahaha</li><li>hahaha</li><li>hahaha</li></ul></div></div><div class="row"><div class="col-md-4"><h3>二手信息</h3><ul><li>hahaha</li><li>hahaha</li><li>hahaha</li><li>hahaha</li></ul></div><div class="col-md-4"><h3>美食</h3><ul><li>hahaha</li><li>hahaha</li><li>hahaha</li><li>hahaha</li></ul></div><div class="col-md-4"><h3>房产</h3><ul><li>hahaha</li><li>hahaha</li><li>hahaha</li><li>hahaha</li></ul></div></div><div class="row"><div class="col-md-4"><h3>汽车</h3><ul><li>hahaha</li><li>hahaha</li><li>hahaha</li><li>hahaha</li></ul></div><div class="col-md-4"><h3>建材</h3><ul><li>hahaha</li><li>hahaha</li><li>hahaha</li><li>hahaha</li></ul></div><div class="col-md-4"><h3>培训</h3><ul><li>hahaha</li><li>hahaha</li><li>hahaha</li><li>hahaha</li></ul></div></div><div class="row"><div class="col-md-4"><h3>微信公众号</h3><p><img src="img/wxcode.jpg" width="120" height="120" /></p><p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p></div><div class="col-md-4"><h3>微博</h3><p><a href="http://weibo.com/xiaobin8878" target="_blank">http://weibo.com/xiaobin8878</p><p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p></div><div class="col-md-4"><h3>QQ联系</h3><p>QQ: 516908542</p><p>QQ群：34034633</p><p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p></div></div><hr><footer><p>&copy; 2015&nbsp;&nbsp;鄂ICP备15002492</p></footer></div><div class="hidden"><script type="text/javascript">var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F9f583c654f14df3d5abcf8ce469f854b' type='text/javascript'%3E%3C/script%3E"));</script></div></body>
</html>
<?php }} ?>
