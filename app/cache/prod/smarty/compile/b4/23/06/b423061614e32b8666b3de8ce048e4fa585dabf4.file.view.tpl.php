<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 16:30:01
         compiled from "C:\OpenServer\domains\Prestashop\admin470gw2bc1\themes\default\template\controllers\request_sql\helpers\view\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1761959afea495167a0-25419262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b423061614e32b8666b3de8ce048e4fa585dabf4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Prestashop\\admin470gw2bc1\\themes\\default\\template\\controllers\\request_sql\\helpers\\view\\view.tpl',
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
  'nocache_hash' => '1761959afea495167a0-25419262',
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
  'unifunc' => 'content_59afea49560ab6_46947759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59afea49560ab6_46947759')) {function content_59afea49560ab6_46947759($_smarty_tpl) {?>

<div class="leadin"></div>


<div class="panel">
	<h3><i class="icon-cog"></i> <?php echo smartyTranslate(array('s'=>'SQL query result','d'=>'Admin.Advparameters.Feature'),$_smarty_tpl);?>
</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['view']->value['error'])) {?>
		<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'This SQL query has no result.','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl);?>
</div>
	<?php } else { ?>
		<table class="table" id="viewRequestSql">
			<thead>
				<tr>
					<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view']->value['key']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
					<th><span class="title_box"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</span></th>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view']->value['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
				<tr>
					<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view']->value['key']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
						<?php if (isset($_smarty_tpl->tpl_vars['view']->value['attributes'][$_smarty_tpl->tpl_vars['name']->value])) {?>
							<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['view']->value['attributes'][$_smarty_tpl->tpl_vars['name']->value],'html','UTF-8');?>
</td>
						<?php } else { ?>
							<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['result']->value[$_smarty_tpl->tpl_vars['name']->value],'html','UTF-8');?>
</td>
						<?php }?>
					<?php } ?>
				</tr>
			<?php } ?>
			</tbody>
		</table>

		<script type="text/javascript">
			$(function(){
				var width = $('#viewRequestSql').width();
				if (width > 990){
					$('#viewRequestSql').css('display','block').css('overflow-x', 'scroll');
				}
			});
		</script>
	<?php }?>
</div>


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
