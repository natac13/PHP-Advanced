<?php

class MyClass {

    /**
     * this is showing how to use docblockr
     * just type /** then tab will insert the snippet with
     * params and everything ready to be filled out
     * @param  Array  $people
     * @param  integer $howfar in miles
     * @return string
     */
    public function run(Array $people, $howfar) {
        return implode(', ',$people) . " needs to run $howfar.";
    }
}
?>