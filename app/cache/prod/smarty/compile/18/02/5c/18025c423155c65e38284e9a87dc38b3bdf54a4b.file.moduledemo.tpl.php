<?php /* Smarty version Smarty-3.1.19, created on 2017-09-09 15:15:55
         compiled from "modules\moduledemo\moduledemo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:450559b3cd6b567bf6-76439134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18025c423155c65e38284e9a87dc38b3bdf54a4b' => 
    array (
      0 => 'modules\\moduledemo\\moduledemo.tpl',
      1 => 1504869976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '450559b3cd6b567bf6-76439134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'desc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b3cd6b56bb57_75446299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b3cd6b56bb57_75446299')) {function content_59b3cd6b56bb57_75446299($_smarty_tpl) {?><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h1>
<h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8');?>
</h2>
<img src="image/sample.jpg" style="width: 250px; height:170px;"/><?php }} ?>
