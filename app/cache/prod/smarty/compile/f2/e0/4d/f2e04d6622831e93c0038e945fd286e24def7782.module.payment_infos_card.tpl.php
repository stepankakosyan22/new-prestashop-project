<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 16:51:07
         compiled from "module:paypal/views/templates/front/payment_infos_card.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1623159b2923b485b06-01416614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2e04d6622831e93c0038e945fd286e24def7782' => 
    array (
      0 => 'module:paypal/views/templates/front/payment_infos_card.tpl',
      1 => 1504874681,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1623159b2923b485b06-01416614',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b2923b4897d6_13929258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b2923b4897d6_13929258')) {function content_59b2923b4897d6_13929258($_smarty_tpl) {?>


<p><?php echo smartyTranslate(array('s'=>'You will be redirected to the PayPal website to process your card payment.','mod'=>'paypal'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>'PayPal secures your payment and protect your financial information with strong encryption tools.','mod'=>'paypal'),$_smarty_tpl);?>
</p><?php }} ?>
