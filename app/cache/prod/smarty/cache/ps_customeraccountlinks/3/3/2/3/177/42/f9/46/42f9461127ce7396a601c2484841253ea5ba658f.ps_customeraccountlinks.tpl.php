<?php /*%%SmartyHeaderCode:2986459aac1048cefa4-81425706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1503913876,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2986459aac1048cefa4-81425706',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ad5143628fb0_12455237',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad5143628fb0_12455237')) {function content_59ad5143628fb0_12455237($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://prestashop.am/ru/my-account" rel="nofollow">
      Ваша учетная запись
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Ваша учетная запись</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://prestashop.am/ru/addresses" title="Адреса" rel="nofollow">
            Адреса
          </a>
        </li>
            <li>
          <a href="http://prestashop.am/ru/order-history" title="Заказы" rel="nofollow">
            Заказы
          </a>
        </li>
            <li>
          <a href="http://prestashop.am/ru/credit-slip" title="Кредитные квитанции" rel="nofollow">
            Кредитные квитанции
          </a>
        </li>
            <li>
          <a href="http://prestashop.am/ru/identity" title="Личные данные" rel="nofollow">
            Личные данные
          </a>
        </li>
        
<li>
  <a href="//prestashop.am/ru/module/ps_emailalerts/account" title="Мои оповещения">
    Мои оповещения
  </a>
</li>

	</ul>
</div>
<?php }} ?>
