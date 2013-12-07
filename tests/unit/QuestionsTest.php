<?php

class QuestionsTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->questions = new \app\questions\Questions;
        // Simulerar post-objektet
        $this->rightAnswers = [
            'question1' => 'alt1',
            'question2' => 'alt2'
        ];
        $this->wrongAnswers = [
            'question1' => 'alt1',
            'question2' => 'alt3'
        ];
        $this->invalid = [
            'question1' => 'alt1',
            'question2' => ''
        ];
    }

    protected function tearDown()
    {
    }

    // tests
    public function test_all_questions_answered()
    {
        // Kolla så att alla frågor är ifyllda
        $this->assertTrue($this->questions->validate($this->wrongAnswers));
        $this->assertFalse($this->questions->validate($this->invalid));
    }

    public function test_extract_assoc_array_to_index()
    {
        $expected = ['alt1', 'alt2'];
        $result = $this->questions->extractQuestions($this->rightAnswers);
        $this->assertEquals($this->questions->extractQuestions($result), $expected);
    }

    public function test_count_right_answers()
    {
        $this->assertEquals($this->questions->countRightAnswers($this->rightAnswers), 2);
        $this->assertEquals($this->questions->countRightAnswers($this->wrongAnswers), 1);
    }

}