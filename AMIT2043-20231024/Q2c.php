<?php
$books = array("2"=>"Harry Porter", "Lord of the Rings", "Hunger Games", "Twilight Saga");

foreach ($books as $book) {
    echo $book . "<br>";
}

$books_with_authors = array(
    array("title" => "Harry Porter", "author" => "J.K. Rowling"),
    array("title" => "Lord of the Rings", "author" => "J.R.R. Tolkien"),
    array("title" => "Hunger Games", "author" => "S. Collins"),
    array("title" => "Twilight Saga", "author" => "S. Meyer")
);

foreach ($books_with_authors as $book) {
    echo $book["title"] . " => " . $book["author"] . "<br>";
}

?>