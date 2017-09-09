<?php /* Smarty version Smarty-3.1.19, created on 2017-09-05 09:40:17
         compiled from "C:\OpenServer\domains\Prestashop\admin470gw2bc1\themes\default\template\controllers\stats\stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1659559ae38c1f09f96-61930334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79aa91aa3c451f47da750665a53e7150c3f6a1da' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Prestashop\\admin470gw2bc1\\themes\\default\\template\\controllers\\stats\\stats.tpl',
      1 => 1503913874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1659559ae38c1f09f96-61930334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ae38c2005328_85593847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ae38c2005328_85593847')) {function content_59ae38c2005328_85593847($_smarty_tpl) {?>

		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Module not found','d'=>'Admin.Stats.Notification'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.','d'=>'Admin.Stats.Notification'),$_smarty_tpl);?>
</h3>
			<?php }?>
		</div>
	</div>
</div>
<?php }} ?>
