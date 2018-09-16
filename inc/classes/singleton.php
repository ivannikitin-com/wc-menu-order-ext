<?php
/**
 * Базовый класс Singleton
 * Обеспечивает доступ к единичному экземпляру и его инициализацию при первом обращении
 */
namespace WCMenuOrderExt;
class Singleton
{    
	/**
	 * Возвращает экземпляр класса
     * @return Singleton
     */
    final public static function getInstance()
    {
        static $instances = array();

        $calledClass = get_called_class();

        if (!isset($instances[$calledClass]))
        {
            $instances[$calledClass] = new $calledClass();
        }

        return $instances[$calledClass];
    }

	/**
	 * Запрещаем прямое создание класса приватным конструктором
     */		
	private function __construct() 
	{
		// Инициализация объекта
		$this->init();
	}
	
	/**
	 * Запрещаем клонирование
     */	
    private function __clone() {}
	
	/**
	 * Инициализация объекта
     */		
	public function init()
    {
		// Должен быть перекрыт потомками
    }
}
