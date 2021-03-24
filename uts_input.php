<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
</head>
<body>
<h2 align="center">Input Data Covid19</h2>
<hr>

<form name="form_input" method="post" action="uts_proses_simpan.php">
    <table width="700" border="0" align="center" >
      <tr>
        <td width="250">NAMA WILAYAH</td>
        <td width="530">
        	<select name="nm_wilayah" type="text" id="nm_wilayah">
        		<option>-</option>
        		<option>DKI Jakarta</option>
        		<option>Banten</option>
        		<option>Jawa Barat</option>
        		<option>Jawa Tengah</option>
        	</select>
        </td>
      </tr>
      <tr>
        <td>JUMLAH POSITIF</td>
        <td><input size="30" name="jml_positif" type="number" id="jml_positif" required></td>
      </tr>
      <tr>
        <td>JUMLAH DIRAWAT</td>
        <td><input size="40" name="jml_dirawat" type="number" id="jml_dirawat" required></td>
      </tr>
      <tr>
        <td>JUMLAH SEMBUH</td>
        <td><input size="40" name="jml_sembuh" type="number" id="jml_sembuh" required></td>
      </tr>
      <tr>
        <td>JUMLAH MENINGGAL</td>
        <td><input size="40" name="jml_meninggal" type="number" id="jml_meninggal" required></td>
      </tr>
      <tr>
        <td>NAMA OPERATOR</td>
        <td><input size="40" name="nm_operator" type="text" id="nm_operator" required></td>
      </tr>
      <tr>
        <td>NIM MAHASISWA</td>
        <td><input size="40" name="nim" type="number" id="nim" required></td>
      </tr>
      <tr>
        <td></td>
        <td><input name="Submit" type="submit" value="Simpan"></td>
      </tr>
      <tr>
        <td></td>
        <td align="right"><a href="uts_output.php">Tampilkan Data >></a></br></td>
      </tr>
    </table>
    </form>

</body>
</html>
