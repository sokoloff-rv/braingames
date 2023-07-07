<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;

function startGames()
{
    line("Welcome to the Brain Game!");
    $name = prompt("May I have your name?");
    line("Hello, $name");

    return $name;
}

function playEvenGame($name)
{
    line("Answer 'yes' if the number is even, otherwise answer 'no'.");
    $countCorrectAnswers = 0;

    while ($countCorrectAnswers < 3 && $countCorrectAnswers >= 0) {
        $number = rand(0, 999);
        $answer = prompt("Question: $number");
        $isEven = $number % 2 === 0;
        if ($isEven && $answer === 'yes' || !$isEven && $answer === 'no') {
            line("Correct!");
            $countCorrectAnswers++;
        } else {
            $correctAnswer = $isEven ? 'yes' : 'no';
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.\nLet's try again, $name!");
            $countCorrectAnswers = -1;
        }
    }

    if ($countCorrectAnswers === 3) {
        line("Congratulations, $name!");
    }
}
