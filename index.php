<?php
//    session_start();
//    $param1 = $_GET ['param1'];
//    $param2 = $_GET ['param2'];
//    $res = $param1 + $param2;
//    $res1 = $param1 - $param2;
//    $res2 = $param1 * $param2;
//    $res3 = $param1 / $param2;
//    $data = array('p1'=>$param1,'p2'=>$param2,'res'=>$res,'res1'=>$res1,'res2'=>$res2,'res3'=>$res3 );
//    $json = json_encode($data);
//    echo $json;
//echo 'test';
//$data = array('p1'=>2121,'p2'=>21,'p3'=>211,'p4'=>1212 );
//
//    $sum1=0;
//foreach($data as $k=>$v){
////    echo $k.':'.$v.'<br>';
//    $sum1+=$v;
//
//}
//echo "`1 массив ",$sum1, ":";
//$arr = array(1,2,3,4,5,6,7,67);
//$sum2 =0;
//
//for ($i = 0; $i < count($arr); $i++) {
////    echo $arr[$i];
//    $sum2 = $arr[$i];
//
//}
//echo "2 массив ",$sum2, ":";
//
//
//$a = 23;
//$b = 34;
//$c = 12;
//if (($a > $b) and  ($a>$c) and ($b > $c)) {
//    echo $a."".$b."".$c."<br>";
//}elseif (($a > $b) and  ($a>$c) and ($b > $c)){
//    echo $a."".$b."".$c."<br>";
//}else{
//    echo $a."".$b."".$c."<br>";
//}


// задание 1

;


//function faa($a)
//{
//    return $a * $a;
//}
//
//echo faa(4);
//
//echo "<p></p>";
//// задание 2
//
//echo "<p></p>";
//$w = 23;
//$n = 34;
//
//if ($w > $n ) {
//    echo $w;
//
//}else {
//    echo $n;
//}
//// задание 3
//echo "<p></p>";
//
//
//$r = 0;
//function mas($r)
//{
//    if (empty($r)){
//        return 0;
//    }
//    return max($r);
//
//}
//
//$num = [4,4,5,5,6,5,7,6,7,7,10];
//echo mas($num);
//echo "<p></p>";
//// задание 4
//
//
//$b = 2;
//
//function kvadrat($b)
//{
//    return $b * $b;
//}
//$res = kvadrat($b);
//echo $res;
//
//
//echo "<p></p>";
//
//echo "<p></p>";
//



//class Test
//{
//
//public function plus($a = 10 , $b = 5)
//{
//return $a + $b;
//
//}
//}
//$obj = new Test();
//echo $obj->plus(10);
//
//echo "<p></p>";
//class Test2
//{
//    public function umn($a = 5 , $b = 5)
//    {
//
//
//        return $a * $b;
//    }
//}
//$obj2 = new Test2();
//echo $obj2->umn(5);

//class Test
//{
//    public $name;
//
//    public $surname;
//
//    public $patronymic;
//
//    public $age;
//
//    public $weight; //вес
//
//    public $height; //рост
//
//    function __construct($name, $surname, $patronymic, $age, $weight, $height){
//        $this->name = $name;
//        $this->surname = $surname;
//        $this->patronymic = $patronymic;
//        $this->age = $age;
//        $this->weight = $weight;
//        $this->height = $height;
//    }
//    function masstel($weight, $height)
//    {
//        $this->weight = $weight;
//        $this->height = $height;
//        return $weight/pow($height,2 );
//    }
//
//}
//$obj = new Test('Anton','Antonovich','Antonov',30,65,175);
//
//echo $obj->name;
//echo "<p></p>";
//echo $obj->surname;
//echo "<p></p>";
//echo $obj->patronymic;
//echo "<p></p>";
//echo $obj->age;
//echo "<p></p>";
//echo $obj->weight;
//echo "<p></p>";
//echo $obj->height;
//echo "<p></p>";
//echo $obj->masstel(65,1.75);
//
//
//
//class Syrcle
//{
//public $radi;
//
//const PI =3.14;
//
//function __construct($radi)
//{
//    $this->radi = $radi;
//}
//function v()
//{
//    return self::PI*pow($this->radi,2);
//}
//}
//$obj = new Syrcle(5);
//print $obj->v();


//class Person{
//    public $name;
//    public $hp;
//
//    public function __construct($name, $hp)
//    {
//        $this->name = $name;
//        $this->hp = 100;
//    }
//
//    public function damage($damage){
//        $this->hp -= $damage;
//        if ($this->hp < 0) {
//            $this->hp = 0;
//            echo '$this.name-> погибает';
//        }
//    }
//    public function heal($hil){
//        $this->hp += $hil;
//        if ($this->hp > 100) {
//            $this->hp = 100;
//        }
//    }
//
//
//}
//
//// Житель
//class Vallager extends Person{
//    public function __construct($name){
//        parent::__construct($name);
//
//    }
//
//    public function damage($damage){
//        // Житель не атакует
//    }
//
//    public function heal($hil){
//        // Житель не умеет лечить
//    }
//
//}
//
//// Воин
//class Warrior extends Person{
//    public function __construct($name){
//        parent::__construct($name);
//    }
//    public function damage($target){
//        if ($this->hp > 100) {
//            $this->damage = 10;
//            $target->hit($this->damage);
//            echo '$this->name бьет $target->name и наносит $damage урона. $target->name его здоровье: $target->hp' ;
//        }
//
//    }
//}
//
//// Целитель
//class Healer extends Person{
//    public function __construct($name){
//        parent::__construct($name);
//    }
//    public function damage($damage){
//        // Целитель не атакует
//    }
//    public function heal($target){
//        if ($this->hp < 100) {
//            $target->heal(10);// лечит на 10 здоровья
//            echo '$this->name лечит $this.name . $target->name здоровье: $target->hp '  ;
//        }
//    }
//}
//
//// Поселения
//
//function poselen($shelterName) {
//    $villager = new Vallager("Житель_$shelterName");
//    $warrior = new Warrior("Воин_$shelterName");
//    $healer = new Healer("Лекарь_$shelterName");
//    return [$villager, $warrior, $healer];
//}
//// Названия поселений
//$selen1 = poselen("Dire");
//$selen2 = poselen("Ancient");
//
//// Игра
//
//while (true){
//    $sostSelen1 = array_filter($selen1, function ($pobed){
//        return $pobed > 0;
//    });
//
//    $sostSelen2 = array_filter($selen2, function ($pobed){
//        return $pobed > 0;
//    });
//    if(count($sostSelen1) == 0){
//        echo 'Победило селение Dire';
//        break;
//    }
//    if(count($sostSelen2) == 0){
//        echo 'Победило с Ancient';
//        break;
//    }
//
//}

try {
    $host = '127.0.0.1';
    $db = 'students';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    // Получение объекта PDO
    $pdo = new PDO($dsn, $user, $pass, $opt);
    var_dump($pdo);
    echo "<br/>";

    // Получение данных из таблицы student по полю name
    $stmt = $pdo->query('SELECT * FROM studentts');
    var_dump($stmt);
    echo "<br/>";
    while ($row = $stmt->fetch())
    {
        echo $row['name']." ".$row['ote']." ".$row['stepen']." ".$row['dr_st'];
        echo "<br/>";

    }
    //update
    $nameupd = 'Anton';
    $idupd = 2;

    $stmtupd = $pdo->prepare('UPDATE studentts SET name = :name WHERE id = :id');
    $stmtupd->bindParam('name', $nameupd);
    $stmtupd->bindParam(':id', $idupd);
    $stmtupd->execute();

    //delete
    $idDel = 2;
    $stmtdel = $pdo->prepare('DELETE FROM studentts WHERE id = :id');
    $stmtdel->bindParam(':id', $idDel);
    $stmtdel->execute();


//insert
//    $gov_number = 3222;
//    $first_name = "Anton";
//    $last_name = "Antonov";
//    $middle_name = "Antonovich";
//
//  $stmt = $pdo->prepare('INSERT INTO  people (gov_number, first_name, last_name, middle_name) VALUES (?, ?, ?, ?)');
//  $stmt->bindParam(1, $gov_number);
//  $stmt->bindParam(2, $first_name);
//  $stmt->bindParam(3, $last_name);
//  $stmt->bindParam(4, $middle_name);
//  $stmt->execute();

} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}


?>

