<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Приветствие</title>
</head>
<body>
  <h1>Приветствие</h1>
  <p>Просто файл, который хочет быть добродушным!</p>
  <form method="POST">
      <input type="text" name="name" placeholder="Введите ваше имя">
      <input type="submit" value="Отправить">
  </form>
</body>
</html>
<?php
  if (isset($_POST['name'])) {
    print('Привет, ' . $_POST['name']);
  }
?>
<br>
<?php
    $x = 5;
    $name = 'John';
    $txt = 'W3Schools.com';
    echo "I love {$txt}!";
    $txt1 = "W3Schools.com";
    print('I love ' . $txt1 . '!');
    $x = 5;
    $y = 10;
    print($x + $y);
?>
<br>
<?php
    $x = 5; // челочисленное
    $z = 3.14; // число с плавающей точкой
    $y = 'Hello'; // строка
?>
<br>
<?php
    var_dump($x);
    var_dump(5);
    var_dump('John');
    var_dump(3.14);
    var_dump(true);
    var_dump([2, 3, 56]);
    var_dump(NULL);
?>
<br>
<?php
    $x = 'John';
    print($x);
?>
<br>
<?php
    $x = $y = $z = 5;
    print($x);
    print($y);
    print($z);
?>
<br>
<?php
    $x = 'Hello world!';
    $y = "Hello world!";  
    var_dump($x);
    print('<br>');
    var_dump($y);
?>
<br>
<?php
    $x = 5985;
    var_dump($x);
    print('<br>');
    $x = 10.365;
    var_dump($x);
    print('<br>');
    $x = true;
    var_dump($x);
    print('<br>');
    $cars = ['Volvo', 'BMW', 'Toyota'];
    var_dump($cars);
    print('<br>');
    class Car {
        public $model;
        public $color;
    
        public function __construct($model, $color) {
            $this->model = $model;
            $this->color = $color;
        }
    
        public function message() {
            return 'My car is a ' . $this->model . ' and the color is ' . $this->color . '.';
        }
    }
    
    $myCar = new Car('Volvo', 'black');
    var_dump($myCar);
    print('<br>');
    $x = 'Hello world!';
    var_dump($x);
    print('<br>');
    $x = null;
    var_dump($x);
    print('<br>');
    $x = 5985;
    var_dump($x);
    print('<br>');
    $x = 'Test';
    var_dump($x);
    print('<br>');
    $x = 5;
    $x = (string) $x;
    var_dump($x);
    print('<br>');
    print('<br>');
    print('<br>');
    // Plagued Lizard （づ￣3￣）づ╭❤️～
?>
