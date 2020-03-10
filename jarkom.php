<?php
function garis($jum) {
	for ($i=0; $i<= $jum; $i++) {
		echo "=";
		}
}
echo '####################################';
echo "\r\n";
echo "\r# Copyright : @systkha - Abdul Khafid#";
echo "\r\n#       Recode by : Christo        #";
echo "\r\n";
echo '####################################';
echo "\r\n";
echo "\r\n#       Pendidikan TIK 2019        #";
echo "\r\n";
echo "\r\n####################################";
echo " \n[x]        PILIH DATA KELAS        [x]"; // ini cuma tampilan
echo "\n\r            A. Kelas Ganjil     ";
echo "\n\r            B. Kelas Genap     ";
echo "\n [?] Ganjil / Genap ? (A / B) : "; // ini menentukan kelas
$tipe = trim(fgets(STDIN)); // ini untuk pilihan kelas
if ($tipe == "A" or $tipe == "a") {
    $mhs = 29;
    echo ("     [x] Total Mahasiswa 36 [x]\n");
    $kel = 7;
    echo ("     [x] Total Kelompok 7 [x]\n");
    $jumlahawal = 5;
    echo ("     [x] Anggota Perkelompok 5 [x]\n");
}
elseif ($tipe == "B" or $tipe == "b") {
    echo ("Lo Mau Gwe Pukul? Lo Kelas Apa sob");
    exit;
}
// echo "\n [?] Masukkan Total Mahasiswa : "; // ini menentukan total mahasiswa
// $pilih = trim(fgets(STDIN)); // ini untuk total mahasiswa
// echo "\n [?] Masukkan Jumlah Kelompok : "; // ini menentukan total kelompok
// $kel = trim(fgets(STDIN)); // ini untuk total kelompok
// echo '####################################';
// echo "\nWait for load data...\n";
// sleep(2);
garis(40);
// echo "\nmasukkan jumlah anggota per kelompok : ";
// $jumlahawal = trim(fgets(STDIN)); 
$jumlah = $jumlahawal - 1;
echo "\nTunggu Bentar Sob... \n";
echo "\nPa bener Christo ganteng banget?\n";
sleep(3);
flush();
$totalmhs = $kel + $mhs;
$totalkel = $mhs / $jumlah; 
$tot = $totalkel;
if($totalmhs % $jumlah == 1 ) { 
	echo "\nKelompok 8 memiliki keuntungan untuk bebas memilih ikut kelompok siapa ehe\n";
	}
	sleep(2);
garis(30);
echo "\ntotal kelompok = $tot\n";

if ($tipe == "A") {
    $lead = array("Arafik","Arkan","Alvin","Putranto","Azmi","Ibrahim","Ricky");
    $data = array("Abella", "Afif", "Ahmad", "Alta", "Amallia", "Anandito", "Azib", "Dimas", "Christian", "Dicky", "Efa", "Evarista", "Faizal", "Fayusri", "Hamid", "Hasna", "Jannah", "Jerry", "Kharisma", "Krisna", "Irji", "Rafi", "Rizky", "Nabila", "Ni Putu", "Otniel", "Pratiwi", "Putu", "Salik", "Wildan"); }// Data Kelas Ganjil
elseif ($tipe == "B") {
	$data = array("Abiyyu", "Afifu", "Alfarkhan", "Alviana", "Alwan", "Amanatuusa", "Bagas", "Auliya", "Bara", "Daryl", "Diki", "Dinda", "Eric", "Faatihah", "Farhan Syarifur", "Ditio", "Hanif", "Hijrah", "Ilham", "Armi", "Mahasiswa", "Jefferson", "Aldi", "Kirana", "Lestari", "Moh. Farhan", "Muh. Dani", "Ilyas", "Naufal", "Zain", "Nadiya", "Nur'Aini", "Philip", "Alif", "Fahmi", "Royan", "Steven", "Yenni"); // Data Kelas Genap
}
		
for ($i = 1; $i<=$tot+1; $i++){
	garis(30);
    echo "\nkelompok ke $i\n";
    shuffle($lead);
    $ketua = array_shift($lead);
    echo "\nKetua Kelompok = $ketua\n";
	garis(30);
	for ( $ii = 1; $ii<=$jumlah; $ii++) {
shuffle($data);
$hasil = array_shift($data);
sleep(1);
flush();
echo "\n$ii > $hasil\n";
}
}
?>
