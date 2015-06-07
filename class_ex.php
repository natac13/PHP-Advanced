<?php
    /**
    * An example of a class defining
    * This is a going to use a special function that will return all the
    * pre-declared classes in php
    */
    class Person {


    }

    // $classes = get_declared_classes();
    // foreach($classes as $class) {
    //     echo $class . "<br>"; // Person will show up at bottom
    // }

    if(class_exists("Person")) {
        echo "That class is defined <br>";
    } else {
        echo "Class not yet defined <br>";
    }
 ?>