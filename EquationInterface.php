<?php
namespace core;
interface LogInterface {
	/**
	 * @param string $str
	 *
	 */
	public static function log($str);
	public static function write();
}
