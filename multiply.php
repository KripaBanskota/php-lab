
<?php
// Base class
class Animal {
    public function makeSound() {
        echo "Animal sound\n";
    }
}

// Single Inheritance
class Dog extends Animal {
    public function bark() {
        echo "Woof! Woof!\n";
    }
}

// Multi-level Inheritance
class Puppy extends Dog {
    public function weep() {
        echo "Weep! Weep!\n";
    }
}

// Hierarchical Inheritance
class Cat extends Animal {
    public function meow() {
        echo "Meow! Meow!\n";
    }
}

// Creating objects and demonstrating inheritance
$dog = new Dog();
$dog->makeSound(); // Output: Animal sound
$dog->bark();      // Output: Woof! Woof!

$puppy = new Puppy();
$puppy->makeSound(); // Output: Animal sound
$puppy->bark();      // Output: Woof! Woof!
$puppy->weep();      // Output: Weep! Weep!

$cat = new Cat();
$cat->makeSound(); // Output: Animal sound
$cat->meow();      // Output: Meow! Meow!


    
    echo "Lab 10 b <br>";
    echo "kripa banskota<br>";
    echo "BIT<br>";

    ?>
   


