<?php

//devuelve la url a la que esta entrando el usuario
class Request
{
	public static function uri()
	{
		return trim($_SERVER['REQUEST_URI'],'/');
	}
}