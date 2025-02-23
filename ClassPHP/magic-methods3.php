<?php

class printer {
    private $name;

    public function __construct($nm){
        $this->name = $nm;
        echo "printer $this->name\n";
    }

    public function __destruct(){
        echo "printer $this->name telah selesai!\n";
    }
}

$pr1 = new printer("Samsung");
$pr2 = new printer("Logitect");

echo "printer sedang berjalan . . .\n";
unset($pr1);