<?php
/**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

/**
 * Class ModuleDemoCore
 */
class ModuleDemoCore extends ObjectModel
{
    public $demo_image;
    public $demo_title;
    public $demo_desc;
    public $demo_active;
    public $id_shop;
    public $id_lang;
    public $context;

    /**
     * @see ObjectModel::$definition
     */

    public static $definition = array(
        'table'=>'module_demo',
        'primary'=>'id_demo',
        'multilang'=>true,
        'fields'=>array(
            'demo_image' =>	array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255),
            'demo_title' =>	array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255),
            'demo_desc' =>	array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255),
            'demo_active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
        )
    );
    public	function __construct($id_demo = null, $id_lang = null, $id_shop = null, Context $context = null)
    {
        parent::__construct($id_demo, $id_lang, $id_shop);
    }

    public function add($autodate = true, $null_values = false)
    {
        $context = Context::getContext();
        $id_shop = $context->shop->id;

        $res = parent::add($autodate, $null_values);
        $res &= Db::getInstance()->execute('
			INSERT INTO `'._DB_PREFIX_.'module_demo` (`id_shop`, `id_demo`)
			VALUES('.(int)$id_shop.', '.(int)$this->id.')'
        );
        return $res;
    }

    public function delete()
    {
        $res = true;

        $images = $this->demo_image;
        foreach ($images as $image)
        {
            if (preg_match('/sample/', $image) === 0)
                if ($image && file_exists(dirname(__FILE__).'/images/'.$image))
                    $res &= @unlink(dirname(__FILE__).'/images/'.$image);
        }
        $res &= Db::getInstance()->execute('
			DELETE FROM `'._DB_PREFIX_.'module_demo`
			WHERE `id_demo` = '.(int)$this->id
        );

        $res &= parent::delete();
        return $res;
    }
























}
