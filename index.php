<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: black; color: white; font-size: 20px; padding: 40px;">



<?php
class Animal {
    public function __construct(public $name ,public $food, public $location) {
        $this->name = $name;
        $this->food = $food;
        $this->location = $location;
    }
}

class Dog extends Animal {
    public $bread;
    public function makeNoise() {
      echo "Собака говорит.<br>";
    }
  
    public function eat() {
      echo "Собака ест " . $this->food . ".<br>";
    }
  
    public function sleep() {
      echo "Собака спит.<br>";
    }
}

class Cat extends Animal {
    public $bread;
    public function makeNoise() {
      echo "Кошка говорит.<br>";
    }
  
    public function eat() {
      echo "Кошка ест " . $this->food . ".<br>";
    }
  
    public function sleep() {
      echo "Кошка спит.<br>";
    }
}

class Horse extends Animal {
    public $bread;
    public function makeNoise() {
      echo "Лошадь говорит.<br>";
    }
  
    public function eat() {
      echo "Лошадь ест " . $this->food . ".<br>";
    }
  
    public function sleep() {
      echo "Лошадь спит.<br>";
    }
}

class Veterinarian {
    public function treatAnimal($animal) {
      echo "Принят на прием: " . $animal->name . "<br>";
      echo "Ест: " . $animal->food . "<br>";
      echo "Место обитания: " . $animal->location . "<br>";
    }
  }
  
  // Пример использования
  $dog = new Dog('Собака', 'кости', 'собачья будка');
  $dog->bread = 'Мопс';
  
  $cat = new Cat('Кошка', 'молоко :)', 'дом');
  $cat->bread = 'Британская';
  
  $horse = new Horse('Лошадь', 'сено', 'загон');
  $horse->bread = 'Арабская';
  
  $vet = new Veterinarian();
  $vet->treatAnimal($dog);
  $vet->treatAnimal($cat);
  $vet->treatAnimal($horse);
?>





</body>
</html>