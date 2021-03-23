<?php
  
  // Menangkap isi variabel dari uts_input.php
  $nm_wilayah     = $_POST['nm_wilayah'];
  $jml_positif    = $_POST['jml_positif'];
  $jml_dirawat    = $_POST['jml_dirawat'];
  $jml_sembuh     = $_POST['jml_sembuh'];
  $jml_meninggal  = $_POST['jml_meninggal'];
  $nm_operator    = $_POST['nm_operator'];
  $nim            = $_POST['nim'];

  // Format data yang akan di parsing
  $data = "\n $nm_wilayah|$jml_positif|$jml_dirawat|$jml_sembuh|$jml_meninggal|$nm_operator|$nim";

  // Buka file data.txt, kemudian tulis kan isi variabel di atas kedalam data.txt
  $fh = fopen("data.txt", "a");
  fwrite($fh, $data);

  // Tutup file data.txt
  fclose($fh);

  // Keterangan bila data berhasil di input
  echo "<SCRIPT>alert('Data Telah Tersimpan');window.location='uts_input.php'</SCRIPT>";

?>