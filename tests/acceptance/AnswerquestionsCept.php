<?php
$I = new WebGuy($scenario);
$I->wantTo('svara på frågor och se hur många rätt jag fått');
$I->amOnPage('public');
$I->seeElement('form');
$I->selectOption('form input[name="question1"]', 'alt1');
$I->selectOption('form input[name="question2"]', 'alt2');
$I->click('input[type="submit"]');
$I->seeCurrentUrlEquals('/codeception/public/submit.php');
$I->see('2 rätt');

$I->wantTo('svara på frågor och se att jag inte har alla rätt');
$I->amOnPage('public');
$I->selectOption('form input[name="question1"]', 'alt1');
$I->selectOption('form input[name="question2"]', 'alt3');
$I->click('input[type="submit"]');
$I->seeCurrentUrlEquals('/codeception/public/submit.php');
$I->see('1 rätt');

$I->wantTo('submitta utan att svara på frågor och redirectas');
$I->amOnPage('public');
$I->click('input[type="submit"]');
$I->seeCurrentUrlEquals('/codeception/public/index.php');

$I->wantTo('submitta utan att svara på alla frågor och redirectas');
$I->amOnPage('public');
$I->selectOption('form input[name="question1"]', 'alt1');
$I->click('input[type="submit"]');
$I->seeCurrentUrlEquals('/codeception/public/index.php');
