<?php
class MyClass {
    // Member variables
    private $var1;
    private $var2;
    private $var3;

    // Parameterized constructor
    public function __construct($v1, $v2, $v3) {
        $this->var1 = $v1;
        $this->var2 = $v2;
        $this->var3 = $v3;
    }

    // Method to display values of data members
    public function displayValues() {
        echo "Var1: " . $this->var1 . "\n";
        echo "Var2: " . $this->var2 . "\n";
        echo "Var3: " . $this->var3 . "\n";
    }

    // Methods to update values of data members
    public function updateVar1($value) {
        $this->var1 = $value;
    }

    public function updateVar2($value) {
        $this->var2 = $value;
    }

    public function updateVar3($value) {
        $this->var3 = $value;
    }
}

// Creating two objects of the class
$obj1 = new MyClass(1, 2, 3);
$obj2 = new MyClass(4, 5, 6);

// Calling methods
$obj1->displayValues();
$obj1->updateVar1(10);
$obj1->updateVar2(20);
$obj1->updateVar3(30);
$obj1->displayValues();

$obj2->displayValues();
$obj2->updateVar1(40);
$obj2->updateVar2(50);
$obj2->updateVar3(60);
$obj2->displayValues();
echo"<br>";
echo"Kripa banskota<br>";
echo"lab 3- 10(a)<br>";
echo"BIT<br>";

?>
