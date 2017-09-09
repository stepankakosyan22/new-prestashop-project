<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 11:35:23
         compiled from "C:\OpenServer\domains\Prestashop\modules\moduledemo\views\templates\admin\_configure\helpers\form\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2420459b2483b967ed1-93445800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c781d748d97ee36eb2f26e380b46a222b95def28' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Prestashop\\modules\\moduledemo\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1504856120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2420459b2483b967ed1-93445800',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b2483b96b4f3_38423447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b2483b96b4f3_38423447')) {function content_59b2483b96b4f3_38423447($_smarty_tpl) {?>
<div style="width:500px; min-height: 500px; margin: 50px auto;text-align: center">
    <form action="'.$_SERVER['REQEST_URU'].'" method="post" class="defaultForm form-horizontal">
            <div class="col-lg-15">
                <div class="dummyfile input-group">
                    <input  type="file" name="demo_image" class="hide-file-upload" value="'.Configuration::get('DEMO_ADV_IMAGE').'"/>
                    <span class="input-group-addon"><i class="icon-file"></i></span>
                    <button type="button" class="btn btn-default">
                        <i class="icon-folder-open"></i> <?php echo smartyTranslate(array('s'=>'ընտրել ֆայլ','d'=>'Admin.Actions'),$_smarty_tpl);?>

                    </button>
                </div>
            </div>

            <div style="padding: 20px;"><span>Title</span><input  type="text" name="demo_title" value="'.Configuration::get('DEMO_ADV_TITLE').'"></div>
            <div style="padding: 20px;"><span>Description</span><input type="text" name="demo_desc" value="'.Configuration::get('DEMO_ADV_DESC').'"></div>
            <input type="submit" name="submitDemo" value="'.$this->l('Save').'" class="btn btn-default" >
    </form>
</div>


















<?php }} ?>
