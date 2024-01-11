<?php
$nilaiharian = 68;
    $nilaiakhir = 80;

    $nilaihariann = $nilaiharian >= 70;
    $nilaiakhirnih = $nilaiakhir >= 80;

    $hasil1 = $nilaihariann && $nilaiakhirnih;
    $hasil2 = $nilaihariann || $nilaiakhirnih;
    var_dump($hasil1);
    echo "<br/>";
    echo "nilai yang muncul adalah false,karena nilai di atas menggunakan operator logika AND,jika menggunakan operator tersebut maka nilai yang di input harus sesuai dengan yang lainnya maka bisa di nyatakan TRUE,tapi sebaliknya jika nilai yang di input berbeda beda,nilai satu dengan yang lainnya berbeda,maka nilai yang muncul adalah false";
    echo "<br/>";
    echo "<br/>";
    var_dump($hasil2);
    echo "<br/>";
    echo "nilai yang muncul adalah TRUE,karna variabel di atas menggunakan operator OR,jika menggunakan operator OR walaupun nilai dari masing-masing variabel berbeda beda dan dari salah satunya memiliki nilai TRUE maka variabel tersebut akan bernilai TRUE";
?>