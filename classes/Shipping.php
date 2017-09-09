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
 * Class ShippingCore
 */
class ShippingCore extends ObjectModel
{
    public $id_shipping;
    public $id_carrier;
    public $first_postalcode;
    public $second_postalcode;
    public $shipping_fee;
    public static $definition = array(
        'table' => 'shipping',
        'primary' => 'id_shipping',
        'fields' => array(
            'id_carrier' =>            array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'first_postalcode' =>        array('type' => self::TYPE_STRING,  'required' => true, 'size' => 255),
            'second_postalcode' =>        array('type' => self::TYPE_STRING,  'required' => true, 'size' => 255),
            'shipping_fee' =>        array('type' => self::TYPE_INT,  'required' => true),
        ));

}
