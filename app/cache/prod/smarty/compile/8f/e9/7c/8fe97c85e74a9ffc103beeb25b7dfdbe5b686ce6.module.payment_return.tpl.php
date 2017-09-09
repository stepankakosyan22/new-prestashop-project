<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 16:05:31
         compiled from "module:ps_checkpayment/views/templates/hook/payment_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1517659b2878b289c16-95586805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fe97c85e74a9ffc103beeb25b7dfdbe5b686ce6' => 
    array (
      0 => 'module:ps_checkpayment/views/templates/hook/payment_return.tpl',
      1 => 1503913906,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1517659b2878b289c16-95586805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'shop_name' => 0,
    'total_to_pay' => 0,
    'checkName' => 0,
    'checkAddress' => 0,
    'reference' => 0,
    'id_order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b2878b2d96d5_83367108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b2878b2d96d5_83367108')) {function content_59b2878b2d96d5_83367108($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['status']->value=='ok') {?>
	<p><?php echo smartyTranslate(array('s'=>'Your order on %s is complete.','sprintf'=>array($_smarty_tpl->tpl_vars['shop_name']->value),'d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>

		<br /><br />
		<?php echo smartyTranslate(array('s'=>'Your check must include:','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>

		<br /><br />- <?php echo smartyTranslate(array('s'=>'Payment amount.','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>
 <span class="price"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_to_pay']->value, ENT_QUOTES, 'UTF-8');?>
</strong></span>
		<br /><br />- <?php echo smartyTranslate(array('s'=>'Payable to the order of','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>
 <strong><?php if ($_smarty_tpl->tpl_vars['checkName']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkName']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>___________<?php }?></strong>
		<br /><br />- <?php echo smartyTranslate(array('s'=>'Mail to','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>
 <strong><?php if ($_smarty_tpl->tpl_vars['checkAddress']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkAddress']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>___________<?php }?></strong>
		<?php if (!isset($_smarty_tpl->tpl_vars['reference']->value)) {?>
			<br /><br />- <?php echo smartyTranslate(array('s'=>'Do not forget to insert your order number #%d.','sprintf'=>array($_smarty_tpl->tpl_vars['id_order']->value),'d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>

		<?php } else { ?>
			<br /><br />- <?php echo smartyTranslate(array('s'=>'Do not forget to insert your order reference %s.','sprintf'=>array($_smarty_tpl->tpl_vars['reference']->value),'d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>

		<?php }?>
		<br /><br /><?php echo smartyTranslate(array('s'=>'An email has been sent to you with this information.','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>

		<br /><br /><strong><?php echo smartyTranslate(array('s'=>'Your order will be sent as soon as we receive your payment.','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>
</strong>
		<br /><br /><?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true),'html'), ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'customer service department.','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>
</a>.
	</p>
<?php } else { ?>
	<p class="warning">
		<?php echo smartyTranslate(array('s'=>'We have noticed that there is a problem with your order. If you think this is an error, you can contact our','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>

		<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true),'html'), ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'customer service department.','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>
</a>.
	</p>
<?php }?>
<?php }} ?>
