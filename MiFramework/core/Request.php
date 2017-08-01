<?php

//devuelve la url a la que esta entrando el usuario
class Request
{
	public static function uri()
	{
		$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		return trim($url,'/');
	}
}