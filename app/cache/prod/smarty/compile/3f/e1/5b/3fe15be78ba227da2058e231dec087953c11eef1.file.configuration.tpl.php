<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 16:47:59
         compiled from "C:\OpenServer\domains\Prestashop\modules\paypal\views\templates\admin\configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:339259b2917f6455f9-74250137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fe15be78ba227da2058e231dec087953c11eef1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Prestashop\\modules\\paypal\\views\\templates\\admin\\configuration.tpl',
      1 => 1504874681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '339259b2917f6455f9-74250137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ec_paypal_active' => 0,
    'ec_card_active' => 0,
    'path' => 0,
    'country' => 0,
    'localization' => 0,
    'return_url' => 0,
    'paypal_card' => 0,
    'active_products' => 0,
    'api_user_name_sandbox' => 0,
    'api_user_name_live' => 0,
    'need_rounding' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b2917f6c23c7_33377497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b2917f6c23c7_33377497')) {function content_59b2917f6c23c7_33377497($_smarty_tpl) {?>

<div dir="ltr" style="text-align: left;" trbidi="on">
    <script type="text/javascript">
        (function(d, s, id){
            var js, ref = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)){
                js = d.createElement(s); js.id = id; js.async = true;
                js.src = "https://www.paypal.com/webapps/merchantboarding/js/lib/lightbox/partner.js";
                ref.parentNode.insertBefore(js, ref);
            }
        }(document, "script", "paypal-js"));
    </script>
</div>
<div class="container-fluid paypal-nav">
    <ul class="nav nav-pills navbar-separator">
        <li <?php if (!$_smarty_tpl->tpl_vars['ec_paypal_active']->value&&!$_smarty_tpl->tpl_vars['ec_card_active']->value) {?>class="active"<?php }?>><a data-toggle="pill" href="#paypal_conf"><span><?php echo smartyTranslate(array('s'=>'Products','mod'=>'paypal'),$_smarty_tpl);?>
</span></a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['ec_paypal_active']->value||$_smarty_tpl->tpl_vars['ec_card_active']->value) {?>class="active"<?php }?>><a data-toggle="pill" href="#paypal_params"><span><?php echo smartyTranslate(array('s'=>'Settings','mod'=>'paypal'),$_smarty_tpl);?>
</span></a></li>
    </ul>
    <div class="tab-content">
        <div id="paypal_conf"  class="tab-pane fade <?php if (!$_smarty_tpl->tpl_vars['ec_paypal_active']->value&&!$_smarty_tpl->tpl_vars['ec_card_active']->value) {?>in active<?php }?>">
            <div class="box half left">
                <div class="logo">
                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal_btm.png" alt=""  />
                </div>
                <div class="info">
                    <p class="paypal-bold"><?php echo smartyTranslate(array('s'=>'Merchant Country','mod'=>'paypal'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['country']->value,'html','UTF-8');?>
</p>
                    <p><i>
                            <?php echo smartyTranslate(array('s'=>'If not specified, Default Country from configuration is used. To modify : ','mod'=>'paypal'),$_smarty_tpl);?>

                            <a target="_blank" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['localization']->value,'html','UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'International > Localization','mod'=>'paypal'),$_smarty_tpl);?>
</a>
                        </i></p>
                    <p class="paypal-bold">
                        <?php echo smartyTranslate(array('s'=>'Benefit from PayPal’s complete payments platform and grow your business online, on mobile and internationally','mod'=>'paypal'),$_smarty_tpl);?>

                    </p>
                </div>
            </div>

            <div class="box half right">
                <ul class="tick">
                    <li><span class="paypal-bold"><?php echo smartyTranslate(array('s'=>'Target more customers','mod'=>'paypal'),$_smarty_tpl);?>
</span><br /><?php echo smartyTranslate(array('s'=>'More than 190 million PayPal active users worldwide','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                    <li><span class="paypal-bold"><?php echo smartyTranslate(array('s'=>'Truly global','mod'=>'paypal'),$_smarty_tpl);?>
</span><br /><?php echo smartyTranslate(array('s'=>'Access a whole world of customers. PayPal is available in more than 200 markets and in 25 currencies','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                    <li><span class="paypal-bold"><?php echo smartyTranslate(array('s'=>'Safer','mod'=>'paypal'),$_smarty_tpl);?>
</span><br /><?php echo smartyTranslate(array('s'=>'We can protect your business with our Seller Protection and advanced encryption and fraud prevention tools','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                    <li><span class="paypal-bold"><?php echo smartyTranslate(array('s'=>'Accept local and international payments','mod'=>'paypal'),$_smarty_tpl);?>
</span></li>
                </ul>
            </div>
            <div style="clear:both;"></div>

            <div class="active-products">
                <p><b><?php echo smartyTranslate(array('s'=>'2 PayPal products selected for you','mod'=>'paypal'),$_smarty_tpl);?>
</b></p>
                <div class="col-sm-6">
                    <div class="panel">
                        <img class="paypal-products" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal.png">
                        <p>
                            <?php echo smartyTranslate(array('s'=>'Accept PayPal payments, you can optimize your conversion rate.','mod'=>'paypal'),$_smarty_tpl);?>

                        </p>
                        <p>
                            <?php echo smartyTranslate(array('s'=>'Fast checkout and fast payment. Make online payments simple. PayPal customers can buy from you quickly if they use One Touch','mod'=>'paypal'),$_smarty_tpl);?>
&trade;
                        </p>
                        <p>
                            <a target="_blank" href="https://www.paypal.com/webapps/mpp/express-checkout"><?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
</a>
                        </p>
                        <div class="bottom">
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal_btm.png" class="product-img">
                            <a class="btn btn-default pull-right" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['return_url']->value,'html','UTF-8');?>
&method=EXPRESS_CHECKOUT&with_card=0<?php if ($_smarty_tpl->tpl_vars['ec_paypal_active']->value) {?>&modify=1<?php }?>" ><?php if ($_smarty_tpl->tpl_vars['ec_paypal_active']->value) {?><?php echo smartyTranslate(array('s'=>'Modify','mod'=>'paypal'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Activate','mod'=>'paypal'),$_smarty_tpl);?>
<?php }?></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel">
                        <img class="paypal-products" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal.png">
                        <p>
                            <?php echo smartyTranslate(array('s'=>'Accept credit cards, debit cards and PayPal payments','mod'=>'paypal'),$_smarty_tpl);?>

                        </p>
                        <p>
                            <?php echo smartyTranslate(array('s'=>'Your customers can pay with a selection of local and international debit and credit cards. Make online payments simple. PayPal customers can buy from you quickly if they use One Touch','mod'=>'paypal'),$_smarty_tpl);?>
&trade;
                        </p>
                        <p><a target="_blank" href="https://www.paypal.com/webapps/mpp/standard"><?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
</a></p>
                        <div class="bottom">
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal_btm.png" class="product-img">
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/mastercard.png" class="product-img">
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/visa.png" class="product-img">
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/discover.png" class="product-img">
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/american_express.png" class="product-img">
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/maestro.png" class="product-img">
                            <a class="btn btn-default pull-right" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['return_url']->value,'html','UTF-8');?>
&method=EXPRESS_CHECKOUT&with_card=1&<?php if ($_smarty_tpl->tpl_vars['ec_card_active']->value) {?>&modify=1<?php }?>"><?php if ($_smarty_tpl->tpl_vars['ec_card_active']->value) {?><?php echo smartyTranslate(array('s'=>'Modify','mod'=>'paypal'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Activate','mod'=>'paypal'),$_smarty_tpl);?>
<?php }?></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="paypal_params" class="tab-pane fade col-sm-12 <?php if ($_smarty_tpl->tpl_vars['ec_paypal_active']->value||$_smarty_tpl->tpl_vars['ec_card_active']->value) {?>in active<?php }?>">
            <div class="panel parametres">
                <div class="panel-body">
                    <div class="col-sm-8 help-left">
                        <?php if (!$_smarty_tpl->tpl_vars['paypal_card']->value) {?>
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal.png">
                            <p>
                                <?php echo smartyTranslate(array('s'=>'Accept PayPal payments, you can optimize your conversion rate.','mod'=>'paypal'),$_smarty_tpl);?>
 : <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['active_products']->value,'html','UTF-8');?>

                            </p>
                            <p>
                                <?php echo smartyTranslate(array('s'=>'Fast checkout and fast payment. Make online payments simple. PayPal customers can buy from you quickly if they use One Touch','mod'=>'paypal'),$_smarty_tpl);?>
&trade;
                            </p>
                            <p>
                                <a target="_blank" href="https://www.paypal.com/webapps/mpp/express-checkout"><?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
</a>
                            </p>
                        <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal.png">
                            <p>
                                <?php echo smartyTranslate(array('s'=>'Accept credit cards, debit cards and PayPal payments','mod'=>'paypal'),$_smarty_tpl);?>
 : <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['active_products']->value,'html','UTF-8');?>

                            </p>
                            <p>
                                <?php echo smartyTranslate(array('s'=>'Your customers can pay with a selection of local and international debit and credit cards. Make online payments simple. PayPal customers can buy from you quickly if they use One Touch','mod'=>'paypal'),$_smarty_tpl);?>
&trade;
                            </p>
                            <p><a target="_blank" href="https://www.paypal.com/webapps/mpp/standard"><?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
</a></p>
                        <?php }?>
                    </div>
                    <div class="col-sm-3 help-right">
                        <p>
                            <?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
 ?
                            <a target="_blank" href="https://www.paypal.com/webapps/mpp/contact-us"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'paypal'),$_smarty_tpl);?>
</a>
                        </p>
                        <p>
                            <?php echo smartyTranslate(array('s'=>'API user name SandBox','mod'=>'paypal'),$_smarty_tpl);?>
 : <?php if ($_smarty_tpl->tpl_vars['api_user_name_sandbox']->value=='') {?><?php echo smartyTranslate(array('s'=>'not specified','mod'=>'paypal'),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['api_user_name_sandbox']->value,'htmlall','UTF-8');?>
<?php }?>
                        </p>
                        <p>
                            <?php echo smartyTranslate(array('s'=>'API user name Live','mod'=>'paypal'),$_smarty_tpl);?>
 : <?php if ($_smarty_tpl->tpl_vars['api_user_name_live']->value=='') {?><?php echo smartyTranslate(array('s'=>'not specified','mod'=>'paypal'),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['api_user_name_live']->value,'htmlall','UTF-8');?>
<?php }?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div style="display: none;">
    <div id="content-rounding-settings">
        <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['return_url']->value,'javascript','UTF-8');?>
" method="post" id="credential-configuration" class="bootstrap">

            <h4><?php echo smartyTranslate(array('s'=>'Warning','mod'=>'paypal'),$_smarty_tpl);?>
</h4>

            <p><?php echo smartyTranslate(array('s'=>'Your product rounding settings are not compliant with PayPal module.','mod'=>'paypal'),$_smarty_tpl);?>
</p>
            <p style='margin-bottom: 30px;'><?php echo smartyTranslate(array('s'=>'Without modification of your PrastaShop configuration, PayPal will round items from cart to your customers.','mod'=>'paypal'),$_smarty_tpl);?>
</p>

            <p>
                <button class="btn btn-default"  onclick="$.fancybox.close();return false;"><?php echo smartyTranslate(array('s'=>'I understand','mod'=>'paypal'),$_smarty_tpl);?>
</button>
                <button class="btn btn-info" name="save_rounding_settings"><?php echo smartyTranslate(array('s'=>'Change rounding settings','mod'=>'paypal'),$_smarty_tpl);?>
</button>
            </p>
        </form>
    </div>

</div>

<script type="text/javascript">

    function display_rounding()
    {
        $.fancybox.open([
            {
                type: 'inline',
                autoScale: true,
                minHeight: 30,
                content: $('#content-rounding-settings').html(),
            }
        ]);
    }

    $(document).ready(function(){

        var need_rounding = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['need_rounding']->value,'html','UTF-8');?>
;

        $('#configuration_form input[name=paypal_sandbox]').change(function(event) {
            sandbox = $('#configuration_form input[name=paypal_sandbox]:checked').val();
            if (need_rounding && sandbox == 0) {
                display_rounding();
            }
        });

        $('#change_product').click(function(event) {
            event.preventDefault();
            $('a[href=#paypal_conf]').click();
        });

        $('#configuration_form').insertAfter($('.parametres'));
        //var activate_link = "";

    });

</script><?php }} ?>
