<?php /* Smarty version Smarty-3.1.19, created on 2017-09-04 17:26:18
         compiled from "C:\OpenServer\domains\Prestashop\themes\classic\modules\ps_emailalerts\views\templates\hook\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:965059ad547aa64a87-80370207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d9f6e81c624f100f1c1152ab00332381a37b028' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Prestashop\\themes\\classic\\modules\\ps_emailalerts\\views\\templates\\hook\\my-account.tpl',
      1 => 1503913876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '965059ad547aa64a87-80370207',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ad547aa6a8d6_94687588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad547aa6a8d6_94687588')) {function content_59ad547aa6a8d6_94687588($_smarty_tpl) {?>

<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="emailsalerts"
   href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
  <span class="link-item">
  <i class="material-icons">&#xE151;</i>
    <?php echo smartyTranslate(array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

  </span>
</a>
<?php }} ?>
