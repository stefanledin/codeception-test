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
            'question2' => 'alt2'
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
        // Annars ska man redirectas tillbaka till index
        // Om alla frågor är ifyllda så ska resultatet räkas ihop
        // Resultatet ska returneras och visas på sidan.
    }

}