<?php
//Setup awal
echo "--POLGAN MART--<br>";
echo "Daftar Pembelian<br><br>";
$nama_barang = ["teh pucuk", "alpokat", "roti", "jus jeruk", "citato"];
$harga_barang = [6000, 2000, 3000, 7000, 4000];

$beli = [];
$jumlah = [];
$total = [];
$grandtotal = 0;

// jumlah jenis barang yang dibeli random (2–5)
$jenis_beli = rand(2, 5);

// ambil index unik langsung dengan array_rand
$barang_terpilih = array_rand($nama_barang, $jenis_beli);

// loop untuk simpan hasil pembelian
foreach($barang_terpilih as $index){  
    $qty = rand(1,5); // jumlah beli random
    
    $beli[] = $index;
    $jumlah[] = $qty;
    $total[] = $harga_barang[$index] * $qty;
}

// tampilkan struk
foreach($beli as $key => $index){
    echo "Nama Barang : ".$nama_barang[$index]."<br>";
    echo "Harga Barang : ".$harga_barang[$index]."<br>";
    echo "Jumlah Beli : ".$jumlah[$key]."<br>";
    echo "Total Harga : ".$total[$key]."<br><br>";
    
    $grandtotal += $total[$key];
}

// Tambahkan garis pemisah
echo "<hr>";
echo "Total Belanja : $grandtotal<br>";
?>