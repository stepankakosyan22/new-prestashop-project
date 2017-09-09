<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class ModuleLast extends Module
{

    public function __construct()
    {
        $this->name = 'modulelast';
        $this->tab = 'front_office_features';
        $this->version = '1.0';
        $this->author = 'Stepan Kakosyan';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.5', 'max' => _PS_VERSION_);
        $this->bootstrap = true;
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        parent::__construct();

        $this->displayName = $this->l('Last module');
        $this->description = $this->l('This module shows last added product by admin.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('LAST')) {
            $this->warning = $this->l('No name provided.');
        }
    }


    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        if (!parent::install() ||
            !$this->registerHook('displayTop') ||
            !$this->registerHook('displayLeftColumn') ||
            !Configuration::updateValue('LAST', 'my friend')
        ) {
            return false;
        }

        return true;
    }

    public function hookDisplayTop($params)
    {
        $this->context->smarty->assign(
            array(
                'my_module_name' => Configuration::get('LAST'),
                'my_module_link' => $this->context->link->getModuleLink('modulelast', 'display'),
            )
        );
        return $this->display(__FILE__, 'modulelast.tpl');
    }
    public function hookDisplayLeftColumn($params)
    {
        return $this->hookDisplayTop($params);
    }
}