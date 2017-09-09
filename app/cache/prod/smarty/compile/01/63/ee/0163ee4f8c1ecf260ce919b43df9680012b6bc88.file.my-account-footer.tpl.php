<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 16:48:26
         compiled from "C:\OpenServer\domains\Prestashop\themes\classic\modules\ps_emailalerts\views\templates\hook\my-account-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2557459b2919ab3dff9-64127464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0163ee4f8c1ecf260ce919b43df9680012b6bc88' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Prestashop\\themes\\classic\\modules\\ps_emailalerts\\views\\templates\\hook\\my-account-footer.tpl',
      1 => 1503913876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2557459b2919ab3dff9-64127464',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b2919ab43d98_58926866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b2919ab43d98_58926866')) {function content_59b2919ab43d98_58926866($_smarty_tpl) {?>

<li>
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
    <?php echo smartyTranslate(array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

  </a>
</li>
<?php }} ?>
