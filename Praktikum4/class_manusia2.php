<?php
// Membuat class manusia 
class Manusia{
    // Buat Properti 
    var $nama;
    var $warna;

// buatlah method atau function
    function tampilkan_nama(){
        return '<br/>Nama saya adalah Salsabila Elsa Rahmadina';
    }
function __construct(){
        return 'Kulit saya berwarna kuning langsat';
    }
}
// buat object
$manusia = new Manusia();

echo $manusia -> __construct();
echo $manusia -> tampilkan_nama();

?>