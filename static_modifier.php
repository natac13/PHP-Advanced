<?php
// With static method I can not use $this->
class Student {

        static $total_students = 0;

        static public function add_student() {
            self::$total_students++;
        }

        static function welcome_students($var='hello') {
            echo "{$var} students.";
        }
}

echo Student::$total_students;
Student::$total_students = 13;
echo "<br>";
echo Student::$total_students;
echo "<br>";
echo Student::welcome_students();
echo "<br>";
Student::add_student(); // 14
Student::add_student(); // 15
Student::add_student(); // 16 $total_students
echo Student::$total_students;
echo "<br>";

// static variable are the php version of class variables. These will go with
// all instances of the classes. As well these variables can be accessed
// without declaring an instance of the class at all. Therefore I do not need
// to go `$x = new ClassName();`
//
// However to access the static variables I use the :: instead of the ->
//
// In python these had a much subtler difference as the instance version was
// called `self.VARIABLE` and the class version got declare like normal.
// Recall having to be carefully in python with making mutable objects as
// class variables like a list and dicts.
//
// When I get a paamayim nekudotayim error from php this is what it is
// referring to. Not correctly calling a static variable in a class.


// Static variable are shared throughout the class tree. Therefore when I
// update the class Three it changes the $foo variable in class One to change
// as well
class One {
    static $foo;
}

class Two extends One {
}

class Three extends One {
}

One::$foo = 1;
Two::$foo = 2;
Three::$foo = 3;
echo One::$foo;
echo "<br>";
echo Two::$foo;
echo "<br>";
echo Three::$foo;


// I would use static methods and variables when I do not actually have an
// instance of something. Or some basic if about the class itself can be set
// as a static variable/method so that it may be accessed anywhere anytime.
// An example could be students. Say we wanted the total number of students,
// which mean I don't care about and reticular student(instance). Or say I
// have a list of possible student type, like junior, senior or freshman and
// sophomore
?>


