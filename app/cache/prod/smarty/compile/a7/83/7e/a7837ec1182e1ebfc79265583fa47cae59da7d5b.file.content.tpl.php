<?php /* Smarty version Smarty-3.1.19, created on 2017-09-04 11:30:23
         compiled from "C:\OpenServer\domains\Prestashop\admin470gw2bc1\themes\new-theme\template\controllers\addons_catalog\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302959ad010fd71d23-42120132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7837ec1182e1ebfc79265583fa47cae59da7d5b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Prestashop\\admin470gw2bc1\\themes\\new-theme\\template\\controllers\\addons_catalog\\content.tpl',
      1 => 1503913876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302959ad010fd71d23-42120132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ad010fdaf3d0_50569020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad010fdaf3d0_50569020')) {function content_59ad010fdaf3d0_50569020($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
