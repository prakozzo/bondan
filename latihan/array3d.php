<?php
$nilai =[
    ["nama" => "andi","mapel" =>["matematika"=>80, "ipa"=>90,"bahasa"=>85]],
     ["nama" => "andi","mapel" =>["matematika"=>75, "ipa"=>88,"bahasa"=>79]],
     ["nama" => "andi","mapel" =>["matematika"=>92, "ipa"=>81,"bahasa"=>87]],
];
foreach ($nilai as $data) {
    echo"nilai". data["nama"] . "<br>";
    foreach ($data["mapel"] as $pelajara => $nilai) {
        echo "$pelajaran: $nilai <br>";
    }
    echo "<br>";
}