<?php
namespace core;
interface LogInterface {
	/**
	 * @param string $str
	 */
	public static function log(string $str):void;
	public static function write():void;
}
