<?php

class Registry {

	private static $data = array();

	public static function get($key, $default = null) {
		if(isset(static::$data[$key])) {
			return static::$data[$key];
		}

		return $default;
	}

	public static function prop($object, $key, $default = null) {
		if($obj = static::get($object)) {
			return $obj->{$key};
		}

		return $default;
	}

	public static function set($key, $value) {
		static::$data[$key] = $value;
	}

	public static function has($key) {
		return isset(static::$data[$key]);
	}

}