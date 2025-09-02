<?php
$siswa=[
    "andi"=>80,
    "budi"=>70,
    "citra"=>90,
    "dedi"=>60,
    "eka"=>75,
];
echo"HASIL KELULUSAN SISWA";
foreach ($siswa as $nama => $nilai) {
    if ($nilai >=75) {
        echo "<br>";
        echo"$nama:lulus(nilai:$nilai)";
    }
    else {
        echo "<br>";
        echo "$nama:tidak lulus(nilai:$nilai)";
    }
}