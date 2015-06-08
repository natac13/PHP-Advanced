<?php
// This is an example of using setters and getter methods to set and access
// variables that are inside the class.


class SetterGetterExample {
    private $a = 1;

    public function set_a($value) {
        $this->a = $value;
    }
    public function get_a() {
        return $this->a;
    }
}

$ex = new SetterGetterExample();
// restricted: echo $ex->a . "<br>";
echo $ex->get_a();
echo "<br>";
$ex->set_a(15);
echo "<br>";
echo $ex->get_a();
echo "<br>";
?>