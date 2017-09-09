<?php /* Smarty version Smarty-3.1.19, created on 2017-09-07 12:16:46
         compiled from "modules\moduledemo\views\templates\hook\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237959b1006ebfaaf8-47482496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d5a40756c08e10473dc54a32072fab56f8b586b' => 
    array (
      0 => 'modules\\moduledemo\\views\\templates\\hook\\list.tpl',
      1 => 1504770571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237959b1006ebfaaf8-47482496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'new_advs' => 0,
    'new_adv' => 0,
    'image_baseurl' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b1006ec44754_64778461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b1006ec44754_64778461')) {function content_59b1006ec44754_64778461($_smarty_tpl) {?>
<div class="panel"><h3><i class="icon-list-ul"></i> <?php echo smartyTranslate(array('s'=>'Creating advertisement','d'=>'Modules.ModuleDemo.Admin'),$_smarty_tpl);?>

	<span class="panel-heading-action">
		<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8');?>
&configure=ps_imageslider&addSlide=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Ավելացնել նորը','d'=>'Admin.Actions'),$_smarty_tpl);?>
" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="slidesContent">
		<div id="demos">
			<?php  $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['new_adv']->value] = new Smarty_Variable; $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['new_adv']->value]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_advs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['new_adv']->value]->key => $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['new_adv']->value]->value) {
$_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['new_adv']->value]->_loop = true;
?>
				<div id="demos_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_adv']->value['id_demo'], ENT_QUOTES, 'UTF-8');?>
" class="panel">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows "></i></span>
						</div>
						<div class="col-md-3">
							<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_baseurl']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_adv']->value['demo_image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_adv']->value['demo_title'], ENT_QUOTES, 'UTF-8');?>
" class="img-thumbnail" />
						</div>
						<div class="col-md-8">
							<h4 class="pull-left">
								#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_adv']->value['id_demo'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_adv']->value['demo_title'], ENT_QUOTES, 'UTF-8');?>

								<?php if ($_smarty_tpl->tpl_vars['new_adv']->value['is_shared']) {?>
									<div>
										<span class="label color_field pull-left" style="background-color:#108510;color:white;margin-top:5px;">
											<?php echo smartyTranslate(array('s'=>'Shared demo','d'=>'Modules.ModuleDemo.Admin'),$_smarty_tpl);?>

										</span>
									</div>
								<?php }?>
							</h4>
							<div class="btn-group-action pull-right">
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['status'], ENT_QUOTES, 'UTF-8');?>


								<a class="btn btn-default"
									href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8');?>
&configure=ps_imageslider&id_slide=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_adv']->value['id_demo'], ENT_QUOTES, 'UTF-8');?>
">
									<i class="icon-edit"></i>
									<?php echo smartyTranslate(array('s'=>'Խմբագրել','d'=>'Admin.Actions'),$_smarty_tpl);?>

								</a>
								<a class="btn btn-default"
									href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8');?>
&configure=ps_imageslider&delete_id_demo=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_adv']->value['id_slide'], ENT_QUOTES, 'UTF-8');?>
">
									<i class="icon-trash"></i>
									<?php echo smartyTranslate(array('s'=>'Հեռացնել','d'=>'Admin.Actions'),$_smarty_tpl);?>

								</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php }} ?>
