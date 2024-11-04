<?php

use Myth\Auth\Entities\User;

if(!function_exists('get_group_name'))
{
	function get_group_name($key)
	{	
        	$authorize    = service('authorization');
		return $authorize->group($key);
	}
}