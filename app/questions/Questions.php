<?php
namespace app\questions;

/**
* Questions
*/
class Questions
{
	protected $rightAnswers = [
		'question1' => 'alt1',
		'question2' => 'alt2'
	];

	function __construct()
	{
		
	}

	public function validate($post)
	{
		$errors = [];
		if (empty($post) || count($post) < 2) {
			array_push($errors, 'tomt');
		}
		foreach ($post as $key => $value) {
			if (empty($value) || $value == '') {
				array_push($errors, $key);
			}
		}
		return (count($errors)) ? false : true;
	}

	public function extractQuestions($questions)
	{
		$array = [];
		foreach ($questions as $question => $answer) {
			array_push($array, $answer);
		}
		return $array;
	}
	public function countRightAnswers($questions)
	{
		$numberOfRightAnswers = 0;
		$questions = $this->extractQuestions($questions);
		$correct = $this->extractQuestions($this->rightAnswers);
		
		for ($i=0; $i < count($questions); $i++) { 
			if ($questions[$i] == $correct[$i]) {
				$numberOfRightAnswers = $numberOfRightAnswers + 1;
			}
		}
		
		return $numberOfRightAnswers;
	}
}