<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 14:04:13
         compiled from "modules\modulelast\views\templates\front\modulelast.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143559afc81d4e7ae8-26918987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63d6b52c845108610442785fb3824f5375e92b4a' => 
    array (
      0 => 'modules\\modulelast\\views\\templates\\front\\modulelast.tpl',
      1 => 1504683923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143559afc81d4e7ae8-26918987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_module_name' => 0,
    'my_module_link' => 0,
    'my_message' => 0,
    'first_number' => 0,
    'second_number' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59afc81d4f4d54_64323086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59afc81d4f4d54_64323086')) {function content_59afc81d4f4d54_64323086($_smarty_tpl) {?><div id="mymodule_block_home" class="block">
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

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_message']->value, ENT_QUOTES, 'UTF-8');?>
<br><br><br><br><br><br>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_module_link']->value, ENT_QUOTES, 'UTF-8');?>

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_number']->value, ENT_QUOTES, 'UTF-8');?>
 * <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_number']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_number']->value*$_smarty_tpl->tpl_vars['second_number']->value, ENT_QUOTES, 'UTF-8');?>

<?php }} ?>
