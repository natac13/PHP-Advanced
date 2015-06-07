<?php
/**
* An example of a class defining
* This is a going to use a special function that will return all the
* pre-declared classes in php
*/
class Person {
    function sayHello() {
        echo "Hello from inside a class.<br>";
    }
}

$methods = get_class_methods("Person");
foreach($methods as $method) {
    echo $method . "<br>";
}

if(method_exists("Person", "sayHello")) {
    echo "Method DOES exist.<br>";
} else {
    echo "Nope. <br>";
}
?>