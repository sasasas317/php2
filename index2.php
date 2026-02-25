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

function faa($a)
{
    return $a * $a;
}

echo faa(4);

echo "<p></p>";
// задание 2

echo "<p></p>";
$w = 23;
$n = 34;

if ($w > $n ) {
    echo $w;

}else {
    echo $n;
}
// задание 3
echo "<p></p>";


$r = 0;
function mas($r)
{
    if (empty($r)){
        return 0;
    }
    return max($r);

}

$num = [4,4,5,5,6,5,7,6,7,7,10];
echo mas($num);
echo "<p></p>";
// задание 4


$b = 2;

function kvadrat($b)
{
    return $b * $b;
}
$res = kvadrat($b);
echo $res;


echo "<p></p>";

echo "<p></p>";



?>

