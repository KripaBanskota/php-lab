<?php
class MyClass {
    // Member variables
    private $var1;
    private $var2;
    private $var3;

    // Parameterized constructor
    public function __construct($param1, $param2, $param3) {
        $this->var1 = $param1;
        $this->var2 = $param2;
        $this->var3 = $param3;
    }

    // Method to display values of data members
    public function displayValues() {
        echo "Var1: " . $this->var1 . "\n";
        echo "Var2: " . $this->var2 . "\n";
        echo "Var3: " . $this->var3 . "\n";
    }

    // Methods to update values of data members
    public function updateVar1($newVal) {
        $this->var1 = $newVal;
    }

    public function updateVar2($newVal) {
        $this->var2 = $newVal;
    }

    public function updateVar3($newVal) {
        $this->var3 = $newVal;
    }
}

// Creating two objects of the class
$obj1 = new MyClass("Value1", "Value2", "Value3");
$obj2 = new MyClass("ValueA", "ValueB", "ValueC");

// Calling methods to display initial values
echo "Object 1 initial values:\n";
$obj1->displayValues();

echo "\nObject 2 initial values:\n";
$obj2->displayValues();

// Updating values using methods
$obj1->updateVar1("NewValue1");
$obj1->updateVar2("NewValue2");
$obj1->updateVar3("NewValue3");

$obj2->updateVar1("NewValueA");
$obj2->updateVar2("NewValueB");
$obj2->updateVar3("NewValueC");

// Calling methods to display updated values
echo "\nObject 1 updated values:\n";
$obj1->displayValues();

echo "\nObject 2 updated values:\n";
$obj2->displayValues();


echo"<br>";
echo"Kripa banskota<br>";
echo"lab 3- 10(a)<br>";
echo"BIT<br>";
?>

