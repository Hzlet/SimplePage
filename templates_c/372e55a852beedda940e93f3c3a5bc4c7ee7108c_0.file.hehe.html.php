<?php /* Smarty version 3.1.27, created on 2015-10-02 10:30:29
         compiled from "D:\phpStudy\WWW\Page\hehe.html" */ ?>
<?php
/*%%SmartyHeaderCode:27999560dec45cf6208_35566589%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '372e55a852beedda940e93f3c3a5bc4c7ee7108c' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\Page\\hehe.html',
      1 => 1443753027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27999560dec45cf6208_35566589',
  'variables' => 
  array (
    'total' => 0,
    'value' => 0,
    'show' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560dec45d63814_62455767',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560dec45d63814_62455767')) {
function content_560dec45d63814_62455767 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27999560dec45cf6208_35566589';
?>
<style type="text/css">
a{
	display: inline-block;
	border:1px solid red;
	width: 20px;
}
.cur{
	background-color: yellow;

}
a:link { 
	font-size: 18px; 
	color: #333399; 
} 
a:visited { 
	font-size: 18px; 
	color: #333399; 
} 
a:hover { 
	font-size: 18px; 
	color: #999999; 
	text-decoration: underline; 
}

.special{
	border: none;
	width: 50px;
}
.special2{
	border: none;
	width: 60px;
}
.jump input{
	width: 50px;
}
.jump{
	margin-top:10px;
}
</style>
<div style='text-align:center;'>
	<?php
$_from = $_smarty_tpl->tpl_vars['total']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
	<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
 <br/>
	<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>

	<br>
	<div id='show'><?php echo $_smarty_tpl->tpl_vars['show']->value;?>
</div>
	<div class='jump'><form action="" method="get"><input type="text" name='p'><button>跳转</button></form></div>
</div>
<?php }
}
?>