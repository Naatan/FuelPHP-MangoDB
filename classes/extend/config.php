<?php

class Config extends \Fuel\Core\Config {
	
	public static function fetch($item, $default = null) {
		
		if (strpos($item, '.') !== false)
		{
			$parts = explode('.', $item);
			$file = array_shift($parts);
			
			self::load($file,$file);
			
			return parent::get($item, $default);
		} else
			return parent::get($item, $default);
		
	}
	
}