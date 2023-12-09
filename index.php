<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: black; color: white; font-size: 20px; padding: 40px;">

<!------------------- Начало PHP кода -------------------->

<?php
class Animal {
    public function __construct(public $name ,public $food, public $location) {
        $this->name = $name;
        $this->food = $food;
        $this->location = $location;
    }
}

class Dog extends Animal {
  public $breed;
  
  public function __construct($name, $food, $location, $breed) {
      parent::__construct($name, $food, $location);
      $this->breed = $breed;
  }

  public function makeNoise() {
      echo "$this->name $this->breed говорит.<br>";
  }

  public function eat() {
      echo "$this->name $this->breed ест $this->food.<br>";
  }

  public function sleep() {
      echo "$this->name $this->breed спит.<br>";
  }
}

class Cat extends Animal {
  public $breed;
  
  public function __construct($name, $food, $location, $breed) {
      parent::__construct($name, $food, $location);
      $this->breed = $breed;
  }

  public function makeNoise() {
      echo "$this->name $this->breed говорит.<br>";
  }

  public function eat() {
      echo "$this->name $this->breed ест $this->food.<br>";
  }

  public function sleep() {
      echo "$this->name $this->breed спит.<br>";
  }
}

class Horse extends Animal {
  public $breed;
  
  public function __construct($name, $food, $location, $breed) {
      parent::__construct($name, $food, $location);
      $this->breed = $breed;
  }

  public function makeNoise() {
      echo "$this->name $this->breed говорит.<br>";
  }

  public function eat() {
      echo "$this->name $this->breed ест $this->food.<br>";
  }

  public function sleep() {
      echo "$this->name $this->breed спит.<br>";
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
  $dog = new Dog('Собака', 'кости', 'собачья будка', 'bread');
  
  $cat = new Cat('Кошка', 'молоко :)', 'дом', 'Британская');
  
  $horse = new Horse('Лошадь', 'сено', 'загон', 'Арабская');
  
  $vet = new Veterinarian();
  $vet->treatAnimal($dog);
  echo '<br>';
  $vet->treatAnimal($cat);
  echo '<br>';
  $vet->treatAnimal($horse);

?>

<!------------------- Конец PHP кода -------------------->



</body>
</html>
