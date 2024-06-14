<?php 
/*$role='admin';
$message='';
switch($role){
    case 'admin':
        $message='welcome,admin';
        break;
    case 'editor':
        $message='welcome! you have some pending ';
        
        break;
    }
   // echo $message;
    $total=0;
    for($i=1;$i<=10;$i++){
        $total+=$i;

    }
  //  print ($total);
    $totals=0;
    $n=1;
    while($n<=5){
        $totals +=$n;
        $n++;
    }
  //  print $totals.'<br/>';


*/


    $tab=[1,-1,200];

   // var_dump ($tab).'<br/>';
    $tab[]=4;//ajouter un element du tableau
    array_unshift($tab,20,30);
    
    array_push($tab,'ifnti','l2');

  //  unset($tab[1]);//suprimer un element du tableau
    asort($tab);
    var_dump( $tab).'<br/>';





   /* $capitals = [
        'burkina faso' => 'ouagadougou',
        'togo' => 'lome',
        'Germany' => 'Berlin',
        'United Kingdom' => 'London',
        'United States' => 'Washington D.C.'
        ];//declaration de dictionnaire(tableau associatif)
        var_dump(isset($capitals['togo']));
        foreach ($capitals as $country => $capital) {
        echo "The capital city of {$country} is $capital" . '<br>';
        }
        */

        
/*$countries = [
'China' => ['gdp' => 12.238 , 'gdp_growth' => 6.9],
'Germany' => ['gdp' => 3.693 , 'gdp_growth' => 2.22 ],
'Japan' => ['gdp' => 4.872 , 'gdp_growth' => 1.71 ],
'USA' => ['gdp' => 19.485, 'gdp_growth' => 2.27 ],
];
// sort the country by GDP
uasort($countries, function ($x, $y) {
return $x['gdp'] <=> $y['gdp'];
});
// show the array
foreach ($countries as $name => $stat) {
echo "$name has a GDP of {$stat['gdp']} trillion USD with a GDP
growth rate of {$stat['gdp_growth']}%" . '<br>';}*/








       /* $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        asort($fruits);
       

        foreach ($fruits as $key => $val) {
    echo "$key = $val\n <br/>";
}
ksort($fruits);

        foreach ($fruits as $key => $val) {
    echo "$key = $val\n <br/>";
}
function cmp($a, $b)
   
{ echo $b;
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$key: $value\n <br/>";
}*/
function fet(){
    static $c=0;
    return $c++;
}
echo fet();
echo fet();
echo fet().'<br/>';
echo '<pre>';
var_dump ($_SERVER["HTTP_HOST"]);
var_dump($_GET['id']);
var_dump($_GET['nom']);


echo '</pre>';
?>