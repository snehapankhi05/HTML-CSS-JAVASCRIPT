// Indexed array
$fruits = array("Apple", "Banana", "Orange");

// Associative array
$ages = array("Alice" => 25, "Bob" => 30);

// Multidimensional array
$students = array(
    array("Alice", 25),
    array("Bob", 30)
);

// Loop indexed
foreach($fruits as $fruit){
    echo $fruit . "<br>";
}

// Loop associative
foreach($ages as $name => $age){
    echo "$name is $age<br>";
}

// Loop multidimensional
foreach($students as $student){
    echo $student[0] . " is " . $student[1] . " years old<br>";
}
