<?php
// Membuat class manusia 
class Manusia{
    // Buat Properti 
    var $nama;
    var $warna;

    // buatlah method atau function
    function tampilkan_nama(){
        return 'Nama saya adalah Salsabila Elsa Rahmadina';
    }

    function warna_kulit(){
        return '<br/>Kulit saya berwarna kuning langsat';
    }
}
// buat object
$manusia = new Manusia();

echo $manusia -> tampilkan_nama();
echo $manusia -> warna_kulit();
?>