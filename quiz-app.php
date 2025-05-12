<?php

$score = 0;

echo "Question 1: What is the capital of France?\n";
echo "a) Berlin\nb) Paris\nc) Madrid\n";
echo "Your answer (a/b/c): ";
$ans1 = trim(fgets(STDIN));
if ($ans1 == "b") {
    echo "Answer is correct!\n";
    $score++;
} else {
    echo "Wrong! The correct answer is (b).\n";
}

echo "Question 2: What is 3 + 3?\n";
echo "a) 8\nb) 10\nc) 6\n";
echo "Your answer (a/b/c): ";
$ans2 = trim(fgets(STDIN));
if ($ans2 == "c") {
    echo "Answer is correct!\n";
    $score++;
} else {
    echo "Wrong! The correct answer is (c).\n";
}

echo "Question 3: Which one is a programming language?\n";
echo "a) HTML\nb) PHP\nc) CSS\n";
echo "Your answer (a/b/c): ";
$ans3 = trim(fgets(STDIN));
if ($ans3 == "b") {
    echo "Answer is correct!\n";
    $score++;
} else {
    echo "Wrong! The correct answer is (b).\n";
}

echo "Question 4: What is the name of your country?\n";
echo "a) Canada\nb) Bangladesh\nc) Turkey\n";
echo "Your answer (a/b/c): ";
$ans1 = trim(fgets(STDIN));
if ($ans1 == "b") {
    echo "Answer is correct!\n";
    $score++;
} else {
    echo "Wrong! The correct answer is (b).\n";
}
echo "You got $score out of 4.\n";

?>