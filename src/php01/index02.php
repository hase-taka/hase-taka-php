<?php

$bikes =[
    [
'name'=>'ハンターカブ',
'weight'=>'118kg',
'img'=>'カブ.jpeg'
    ],
    [
'name'=>'CBR250RR',
'weight'=>'168kg',
'img'=>'cbr250.jpeg'
    ],
    [
'name'=>'レブル500',
'weight'=>'191kg',
'img'=>'レブル500.jpeg'
    ],
    [
'name'=>'GB350',
'weight'=>'179kg',
'img'=>'GB350.jpeg'
    ],
    [
'name'=>'CB300R',
'weight'=>'144kg',
'img'=>'cb300r.jpeg'
    ],
    [
'name'=>'ホーネット600',
'weight'=>'195kg',
'img'=>'ホーネット600.jpeg'
    ],
    [
'name'=>'ninja400',
'weight'=>'167kg',
'img'=>'ninja400.jpeg'
    ],
    [
'name'=>'zephyr400',
'weight'=>'186kg',
'img'=>'zephyr400.jpeg'
    ],
    [
'name'=>'CB400SB',
'weight'=>'206kg',
'img'=>'cb400sb.jpeg'
    ],
];

foreach ($bikes as $bike) {
   echo $bike['name']."<br>";
   echo $bike['weight']."<br>";
   echo $bike['img']."<br>";
   echo "<br>";
  }

var_dump($bike);
