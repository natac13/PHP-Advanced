<?php
// A constructor function is one that is called as the class has become
// instantiated. Which means assigning it to a variable name.
// $table = new Table();


class Table {
    public $legs;
    static public $total_tables = 0;

    function __construct() {
        $this->legs = 4;
        Table::$total_tables++;
    }
    // The parenthesis of the __construct method is for values that I would
    // pass in when instantiating a instance of a class.
    // function __construct($leg_count);
    // $t1 = new Table(4); Therefore $leg_count would be 4
    //
    // Always I good idea / practice to give the construct method some default
    // value in case one gets missed when creating a instance. Avoids errors.
}

$table = new Table();
echo $table->legs . "<br>";

// Yes I could just have $legs = 4; however, think of something more complex,
// such as accessing a database or creating things based off of input when
// instantiating the class.

echo Table::$total_tables . "<br>";
$t1 = new Table();
echo Table::$total_tables . "<br>";
$t2 = new Table();
echo Table::$total_tables . "<br>";

// very simple example however just shows how I can take care of any business
// each time an instance is created from a class
?>