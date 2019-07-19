<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style3.css">
    
    <title>Document</title>
</head>
<body>

    <?php
    // class Pokemon {
    //     private $name;
    //     public $pokemon;

    //     public function __construct($name , $pokemon) {
    //         $this->name = $name;
    //         $this->pokemon = $pokemon;
    //     }

    //     public function pokemonMaster() {
    //         echo "$this->name is pokemon master and have a $this->pokemon";
    //     }

    //     public function introduce() {
    //         $this->pokemonMaster();
    //     }
    // }

    // $tranor = new Pokemon("ken" , "pikacyu");
    // $tranor->pokemonMaster();
    // $tranor->introduce();
    // echo $tranor->name;

    class Animal {
        protected $breed;
        protected $name;
        protected $color;

        public function __construct($breed, $name, $color) {
            $this->breed = $breed;
            $this->name = $name;
            $this->color = $color;
        }

        public function canEat() {
            echo "I am $this->name can eat<br>";
        }

        public function canWalk() {
            echo "$this->name can walk<br>";
        }
    }

    class Dog extends Animal {
        private function sayHello() {
            echo "hi my favorite animal is $this->name<br>";
        }

        public function sayPrivate() {
            return $this->sayHello();
        }

        public function returnParent() {
            echo "$this->breed<br>";
            echo "$this->name<br>";
            echo "$this->color<br>";
        }

    }

    $dog = new Dog("shiba", "pochi", "brown");
    $dog->canEat();
    $dog->canWalk();
    $dog->sayPrivate();
    $dog->returnParent();

?>
</table>
</body>
</html>