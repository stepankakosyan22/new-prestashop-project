<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 16:44:34
         compiled from "C:\OpenServer\domains\Prestashop\modules\ps_checkpayment\views\templates\hook\infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1723659b290b2068cb7-49905154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4961b693d612efaeb6332e6fbc47480bf416e02c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Prestashop\\modules\\ps_checkpayment\\views\\templates\\hook\\infos.tpl',
      1 => 1503913906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1723659b290b2068cb7-49905154',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b290b206f308_91051074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b290b206f308_91051074')) {function content_59b290b206f308_91051074($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/ps_checkpayment/ps_checkpayment.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment'.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
