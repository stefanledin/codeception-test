<?php
namespace app\questions;

/**
* Questions
*/
class Questions
{
	
	function __construct()
	{
		
	}

	public function validate($post)
	{
		$errors = [];
		foreach ($post as $key => $value) {
			if (empty($value) || $value == '') {
				array_push($errors, $key);
			}
		}
		return (count($errors)) ? false : true;
	}
}