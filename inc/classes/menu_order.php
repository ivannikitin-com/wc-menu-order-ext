<?php
/**
 * Класс обеспечивает вывод menu order в таблице товаров
 */
namespace WCMenuOrderExt;
class Menu_Order extends Singleton
{
	const POST_TYPE = 'product';
	const MENU_ORDER = 'menu_order';
	
	/**
	 * Инициализация объекта
     */		
	public function init()
    {
		// Изменение колонок таблицы продуктов 
		add_filter( 'manage_' . self::POST_TYPE . '_posts_columns', array( $this, 'set_custom_edit_columns') );
		
		// Вывод поля в колонку Индекс сортировки
		add_action( 'manage_' . self::POST_TYPE . '_posts_custom_column' , array( $this, 'show_custom_column'), 10, 2 );
    }
	
	/**
	 * Изменяет список колонок таблицы проуктов
     */		
	public function set_custom_edit_columns( $columns )
	{
		$columns[ self::MENU_ORDER ] = __( 'Индекс сортировки', Plugin::TEXT_DOMAIN );
		return $columns;
	}
	
	/**
	 * Выводит содержание колонки
     */		
	public function show_custom_column( $column, $post_id )
	{
		if ( $column == self::MENU_ORDER )
		{
			$post = get_post( $post_id );
			echo $post->menu_order;
		}
	}	
}