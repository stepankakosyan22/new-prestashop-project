<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 16:23:18
         compiled from "C:\OpenServer\domains\Prestashop\themes\classic\templates\checkout\_partials\cart-summary-items-subtotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2552559b28bb65e13a1-39295808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5003462a134d43b2f9593084b78017115b92ca18' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Prestashop\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1503913876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2552559b28bb65e13a1-39295808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b28bb65e7f23_72535115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b28bb65e7f23_72535115')) {function content_59b28bb65e7f23_72535115($_smarty_tpl) {?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>

<?php }} ?>
