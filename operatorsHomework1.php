<?php
/*
//Задание 1.1
$number1 = rand(0, 10);
$number2 = rand(0, 10);

//Задание 1.2

var_dump($number1 + $number2);
var_dump($number1 - $number2);
var_dump($number1 * $number2);
var_dump($number1 / $number2);

//Задание 1.3
var_dump($number1 > $number2);
var_dump($number1 == $number2);
var_dump($number1 < $number2);

//Задание 1.4
var_dump($number1++);

//Задание 1.5
var_dump(++$number2);




//Задание 2.1 
$daysBeforeExam = rand(0, 9);
$daysToPrepareForExam = rand(0, 9);

//Задание 2.2
$answer = $daysToPrepareForExam > $daysBeforeExam ? "Мне крышка" : "Главное - не расслабляться";
var_dump($answer);

//Задание 2.3
$answer = $daysToPrepareForExam < $daysBeforeExam ? "Ууу, ещё успею в дотку поиграть" : "Успею или не успею";
var_dump($answer);

//Задание 2.4 
$answer = $daysToPrepareForExam == $daysBeforeExam ? "Впритирочку" : "Либо все плохо, либо очень плохо";
var_dump($answer);

*/

//Задание 3.1

$result1 = [
    "author" => 
    [
        "name_sername" => "Иванов Иван Иванович",
        "email" => "email@mail.ru"
    ], 
    "book" => 
    [
        "title" => "Победа",
        "email" => "email@mail.ru"
    ]
];

//Задание 3.2
var_dump( $result1["author"]["name_sername"] . " написал книгу, которая называется: " . $result1["book"]["title"]);

//Задание 3.3
var_dump("Автор " . $result1["author"]["name_sername"] . " ждёт ваших отзывов, напишите ему на электронную почту " . $result1["book"]["email"]);

//Задание 4.1

$result2 = 
[
    "authors" => 
    [
        "name" => 
        [
            1 => "Иванов Иван Иванович",
            2 => "Петров Пётр Петрович"
        ],
        "email" =>
        [
            1 => "email1@mail.ru",
            2 => "email2@mail.ru"
        ]
    ],
    "books" => 
    [
        "title" => 
        [
            1 => "Book1",
            2 => "Book2"
        ],
        "email" =>
        [
            1 => "email1@mail.com",
            2 => "email2@mail.com"       
        ]
    ]
];
//В нашей библиотеке точно есть две книги, которые вы ищете: #Название 1-й книги# и #Название 2-й книги#.
var_dump("В нашей библиотеке точно есть две книги, которые вы ищете: " . $result2["books"]["title"][1] . " и " . $result2["books"]["title"][2]);

//Пожалуйста, перестаньте писать гневные письма на адрес нашего любимого автора #Фио 1-го автора# (#Email 1-го автора#). Пишите их лучше другому нашему автору — #Фио 2-го автора# (#Email 2-го автора#), мы его любим поменьше.
var_dump("Пожалуйста, перестаньте писать гневные письма на адрес нашего любимого автора " . $result2["authors"]["name"][1] . "(" . $result2["authors"]["email"][1] . ")" . ". Пишите их лучше другому нашему автору — " . $result2["authors"]["name"][2] . "(" . $result2["authors"]["email"][2] . ")" . ", мы его любим поменьше.");
