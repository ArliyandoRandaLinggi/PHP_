<?php

for ($i = 1; $i < 10; $i++) {       //perulangan pertama ($i). perulangan akan terus berjalan selama ($i) lbh bsr dari atau sama dgn 1.
    for ($j = 0; $j < $i; $j++) {   // perulangan kedua ($j) utk mencetak bintang pada setiap baris berdasarkan nilai (`$i`)
        echo "<b> * </b>";      //$i . " " --> nampilin ke angka
    }
    echo "<br>";
}


	$star=10;
	for($a=$star;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}
