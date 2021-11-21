
<?php

$name =  'Helis';

echo "Hello \n $name";

$array = [];
$array = [1,2,3,4];

$array = [
    'name' => 'Helis',
    'age' => 31,
    5 => true
];

echo $array ['age'];

array_push($array, 32);
$array[] = "hello";
$array['color'] = 'green';
var_dump($array);


foreach($array as $key=>$value){
    echo $key . ':' . $value . "\n";
}

foreach($array as $value) {
    echo $value . "\n";
}
trait Pettable {
    public $hasFur;
    public function setHasFur($value){
        $this-> hasFur = $value;
    }
}
class Cat {
    use Pettable;
     private $name;
     public function __construct($name){
            $this->name = $name;
            echo "Cat Constructor\n";
     }
     public function __destruct(){
        echo "Cat Destructor\n"; 
     }
}

$cat = new Cat("Nuustik");
$cat->age = 23;
echo "something else\n";

