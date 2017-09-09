<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 16:28:57
         compiled from "C:\OpenServer\domains\Prestashop\admin470gw2bc1\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1637059afea091f86f5-37030446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19216fa1bedf274f78312834c44f46e64dae9bed' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Prestashop\\admin470gw2bc1\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1503913874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1637059afea091f86f5-37030446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59afea091fc5d6_90461149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59afea091fc5d6_90461149')) {function content_59afea091fc5d6_90461149($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>

<?php }} ?>
