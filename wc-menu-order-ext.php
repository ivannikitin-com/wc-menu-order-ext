<?php
/**
 * Plugin Name:  WC Menu Order Ext
 * Plugin URI:   https://github.com/ivannikitin-com/wc-menu-order-ext
 * Description:  Сервисные расширения сортировки WooCommerce menu order
 * Version:      20180915
 * Author:       Иван Никитин и партнеры
 * Author URI:   https://ivannikitin.com/
 * License:      GNU General Public License v.3
 * License URI:  https://www.gnu.org/licenses/gpl-3.0.ru.html
 * Text Domain:  wc-menu-order-ext
 * Domain Path:  /lang
 */
namespace WCMenuOrderExt;
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Подключаем классы
 */
include( 'inc/classes/singleton.php' );
include( 'inc/classes/menu_order.php' );

/** 
 * Основной класс плагина
 */
class Plugin extends Singleton
{
	const TEXT_DOMAIN = 'wc-menu-order-ext';
	
	
	/**
	 * Инициализация объекта
     */		
	public function init()
    {
		// Инициализируем menu order
		Menu_Order::getInstance();
    }
}

/** 
 * Запуск плагина
 */
Plugin::getInstance();
