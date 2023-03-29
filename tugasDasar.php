<?php 
// buat angka 1-100
// kelipatan 3 memanggil func luas lingkaran dengan jari"nya diambil dari angka tersebut dibagi 3 dan menghasilkan output {rumus luas lingkaran (pi * jari-jari**2) }
// kelipatan 5 memanggil func keliling lingkaran dengan jari" diambil dari angka tersebut dibagi 5 dan menghasikan output {rumus keliling (2*pi*jari-jari)}
// jika kelipan 3 dan 5 maka memanggil func luas persegi dengan panjang angka tersebut dibagi 3 dan lebar di bagi 5 dan menghasilkan output {rumus luas persegi (panjang * lebar)}
// semua angka dijawibkan menggunakan 2 angka dibelakang koma misal 1.00

// membuat angka berhail !!
// function test(float $angka) {
//     for ($i = 1; $i <= $angka; $i++){
//         printf("%.2f\n", $i);
//     }
// }
// test(100);


$pi = 3.14;

function luasLingkaran (float $angka)
{
    global $pi;
    $hasil = $pi * ($angka/3)**2;
    echo "Luas lingkaran adalah $hasil" . PHP_EOL;
    
    
};
// luasLingkaran(6.00); testing

function kelilingLingkaran (float $angka)
{
    global $pi;
    $hasil = 2 * $pi * ($angka/5);
    echo "Keliling lingkaran adalah $hasil" . PHP_EOL;
}
// kelilingLingkaran(15.00); testing

function luasPersegi (float $angka) 
{
    $hasil = ($angka/3) * ($angka/5);
    printf("Luas persegi adalah %.2f\n", $hasil);
    

}
// luasPersegi(30.00);


// result
function test(float $angka) {
    for ($i = 1; $i <= $angka; $i++){
        if ($i % 3 == 0  && $i % 5 == 0){
            luasPersegi($i);
        } elseif($i % 3 == 0){
            luasLingkaran($i);
        }elseif($i % 5 == 0) {
            kelilingLingkaran($i);
        }else{
            printf("%.2f\n", $i);

        }

    }
}

test(100);


