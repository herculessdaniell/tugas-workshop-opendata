<?php

// nama file JSON data Jawa Timur
$jeneng_file = "data_jatim.json";

// membaca isi file JSON
$data_json = file_get_contents($jeneng_file);

// jika file tidak terdeteksi
if($data_json == false){
    echo "File tidak terdeteksi\n";
    exit;
}

// merubah JSON menjadi array PHP
$data_array = json_decode($data_json, true);

// mengambil isi data utama dari key "data"
$daftar_data = $data_array["data"];

// judul tampilan
echo "=== DATA DBHCHT JAWA TIMUR 2025 ===\n\n";

// nomer awal
$nomer = 1;

// looping menampilkan isi data
foreach($daftar_data as $baris){

    echo $nomer . ". ";
    echo "Provinsi : " . $baris["nama_provinsi"] . "\n";
    echo "Kategori : " . $baris["kategori"] . "\n";
    echo "Jumlah   : " . $baris["jumlah"] . " " . $baris["satuan"] . "\n";
    echo "Tahun    : " . $baris["tahun"] . "\n\n";

    $nomer++;
}

// pesan akhir
echo "Selesai menampilkan data Jawa Timur.\n";

?>