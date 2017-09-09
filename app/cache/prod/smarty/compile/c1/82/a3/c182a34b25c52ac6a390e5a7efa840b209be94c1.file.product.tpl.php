<?php /* Smarty version Smarty-3.1.19, created on 2017-09-05 09:39:09
         compiled from "modules\ps_emailalerts\views\templates\hook\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1763759ae387dbed574-32924266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c182a34b25c52ac6a390e5a7efa840b209be94c1' => 
    array (
      0 => 'modules\\ps_emailalerts\\views\\templates\\hook\\product.tpl',
      1 => 1504357974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1763759ae387dbed574-32924266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email' => 0,
    'id_product' => 0,
    'id_product_attribute' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ae387dbfa178_27975906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ae387dbfa178_27975906')) {function content_59ae387dbfa178_27975906($_smarty_tpl) {?>

<div class="js-mailalert" data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'actions','params'=>array('process'=>'add')),$_smarty_tpl);?>
">
	<?php if (isset($_smarty_tpl->tpl_vars['email']->value)&&$_smarty_tpl->tpl_vars['email']->value) {?>
		<input type="email" placeholder="<?php echo smartyTranslate(array('s'=>'your@email.com','d'=>'Modules.Mailalerts.Shop'),$_smarty_tpl);?>
"/><br />
	<?php }?>
  <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product']->value, ENT_QUOTES, 'UTF-8');?>
"/>
  <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
"/>
	<a href="#" rel="nofollow" onclick="return addNotification();"><?php echo smartyTranslate(array('s'=>'Notify me when available','d'=>'Modules.Mailalerts.Shop'),$_smarty_tpl);?>
</a>
	<span style="display:none;"></span>
</div>
<?php }} ?>
