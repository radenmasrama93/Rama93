<?php
$json_data=file_get_contents("datamahasiswa.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->Nim;
echo "<br>";
echo "Nama: ";echo $obj->Nama;
echo "<br>";
echo "Alamat: ";echo $obj->Alamat;
echo "<br>";
echo "No_Hp: ";echo $obj->No_Hp;
echo "<br>";
echo "Mata kuliah1: ";echo $obj->Matkul[0];
echo "<br>";
echo "Mata kuliah2: ";echo $obj->Matkul[1];
echo "<br>";
echo "Mata kuliah3: ";echo $obj->Matkul[2];
?>