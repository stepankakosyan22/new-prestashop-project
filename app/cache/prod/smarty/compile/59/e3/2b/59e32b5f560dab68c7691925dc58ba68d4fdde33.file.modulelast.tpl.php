<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 14:57:10
         compiled from "modules\modulelast\views\templates\hook\modulelast.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2616859b277867359c3-40091319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59e32b5f560dab68c7691925dc58ba68d4fdde33' => 
    array (
      0 => 'modules\\modulelast\\views\\templates\\hook\\modulelast.tpl',
      1 => 1504866721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2616859b277867359c3-40091319',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_module_name' => 0,
    'my_module_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b2778673d0f5_35407235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b2778673d0f5_35407235')) {function content_59b2778673d0f5_35407235($_smarty_tpl) {?><div id="mymodule_block_home" class="block">
    <h4>Welcome!</h4>
    <div class="block_content">
        <p>Hello,
            <?php if (isset($_smarty_tpl->tpl_vars['my_module_name']->value)&&$_smarty_tpl->tpl_vars['my_module_name']->value) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_module_name']->value, ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                World
            <?php }?>
            !
        </p>
        <ul>
            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_module_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="Click this link">Click me!</a></li>
        </ul>
    </div>
</div>
<?php }} ?>
