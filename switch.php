<?php 
$role='admin';
$message='';
switch($role){
    case 'admin':
        $message='welcome,admin';
        break;
    case 'editor':
        $message='welcome! you have some pending ';
        
        break;
    }
    echo $message;
    $total=0;
    for($i=1;$i<=10;$i++){
        $total+=$i;

    }
    print ($total);
    $totals=0;
    $n=1;
    while($n<=5){
        $totals +=$n;
        $n++;
    }
    print $totals.'<br/>';

    $tab=[1,200,'sarata'];

    var_dump ($tab).'<br/>';
    $tab[]=4;//ajouter un element du tableau
    array_unshift($tab,20,30);
    unset($tab[1]);//suprimer un element du tableau

    var_dump( $tab).'<br/>';


    $capitals = [
        'burkina faso' => 'ouagadougou',
        'togo' => 'lome',
        'Germany' => 'Berlin',
        'United Kingdom' => 'London',
        'United States' => 'Washington D.C.'
        ];//declaration de dictionnaire(tableau associatif)
        foreach ($capitals as $country => $capital) {
        echo "The capital city of {$country} is $capital" . '<br>';
        }
