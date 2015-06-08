<?php
    class Calc {
        public $input1;
        protected $input2;
        private $output;


// Note:
// functions are public by default, however they can also be private and
// protected just like variables.
        function setInput1($number) {
            $this->input1 = (int) $number;
        }

        function setInput2($number) {
            $this->input2 = (int) $number;
        }

        function calculate() {
            $this->output = $this->input1 * $this->input2;
        }

        function getResult() {
            return $this->output;
        }
    }


    $ex = new Calc();
    $ex->setInput1(5);
    $ex->setInput2(20);
    $ex->calculate();
    $ex->getResult();
    // if I tries to get the result but just calling the variable $ex->$output
    // it throws an error since it is a private variable
    //
    // A Private variable is one that is only alailable to the class itself...
    // however the protected variable is available to the class and all of
    // the children classes


// this is a brief example of how the extended class can use the input2
// variable however I still need a function in this new class to return it
// outside the class.
    class Test extends Calc {
        function getinput2() {
            return $this->input2;
        }
    }

    $x = new Test();
    $x->setInput2(13);
    $y = $x->getinput2();
    echo "x: {$y}";
 ?>