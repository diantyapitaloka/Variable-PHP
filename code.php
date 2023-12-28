<?php
  $nama = "Jason";
  $a = 5;
  $b = 10;
?>

<?php
  $nama = "Jason";
  echo "Perkenalkan nama saya adalah $nama";
?>

<?php
  function belajar() {
    $a = 5; // cakupan lokal
    echo "Nilai variabel a dalam function adalah: $a";
  } 
  belajar();

  // memanggil variabel a di luar function akan menghasilkan error
  echo "Nilai variabel a di luar function adalah: $a";
?>

<?php
  $a = 5; // cakupan global
 
  function belajar() {
    // memanggil variabel a di dalam function akan menghasilkan error
    echo "Nilai variabel a dalam function adalah: $a";
  } 
  belajar();
  echo "Nilai variabel a di luar function adalah: $a";
?>

<?php
  function hitung() {
    static $a = 5;
    echo $a;
    $a++;
  }
  hitung();
  hitung();
?>