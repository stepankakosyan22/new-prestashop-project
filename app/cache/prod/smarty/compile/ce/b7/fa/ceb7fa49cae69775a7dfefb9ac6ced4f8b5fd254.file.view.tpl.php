<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 16:29:33
         compiled from "C:\OpenServer\domains\Prestashop\admin470gw2bc1\themes\default\template\controllers\backup\helpers\view\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2305559afea2d785bb7-35609815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceb7fa49cae69775a7dfefb9ac6ced4f8b5fd254' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Prestashop\\admin470gw2bc1\\themes\\default\\template\\controllers\\backup\\helpers\\view\\view.tpl',
      1 => 1503913874,
      2 => 'file',
    ),
    '5df85ffb59c43327aa7db3f7c5a4110f1beae31f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Prestashop\\admin470gw2bc1\\themes\\default\\template\\helpers\\view\\view.tpl',
      1 => 1503913874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2305559afea2d785bb7-35609815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59afea2d7be7a2_36269091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59afea2d7be7a2_36269091')) {function content_59afea2d7be7a2_36269091($_smarty_tpl) {?>

<div class="leadin"></div>


	<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||count($_smarty_tpl->tpl_vars['errors']->value)==0) {?>
	<div class="panel">
		<h3><i class="icon-download"></i> <?php echo smartyTranslate(array('s'=>'Download','d'=>'Admin.Actions'),$_smarty_tpl);?>
</h3>
		<div class="alert alert-success"><?php echo smartyTranslate(array('s'=>'Beginning the download ...','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl);?>
</div>
		<p><?php echo smartyTranslate(array('s'=>'Backup files should automatically start downloading.','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl);?>
</p>
		<p><?php echo smartyTranslate(array('s'=>'If not,[1][2] please click here[/1]!','sprintf'=>array('[1]'=>'<a href="{$url_backup}" class="btn btn-default">','[/1]'=>'</a>','[2]'=>'<i class="icon-download"></i>'),'d'=>'Admin.Advparameters.Notification'),$_smarty_tpl);?>
</p>
		<iframe  style="width:0px; height:0px; overflow:hidden; border:none;" src="<?php echo $_smarty_tpl->tpl_vars['url_backup']->value;?>
"></iframe>
	</div>
	<?php }?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
