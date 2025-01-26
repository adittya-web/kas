<?php
include("koneksi.php");
?>
<html>
 <head>
 <title>INPUT TABUNGAN</title>
<script>
 function hitung() {
     interval = setInterval("cari_jumlah_masuk()", 1);
 }
 function cari_jumlah_masuk() {
     jml = document.frmTabungan.jumlahmasuk.value;
     total = parseFloat(jml); 
     document.frmTabungan.total.value = total;
 }
 function stopCalc() {
     clearInterval(interval);
 }
</script>
 <center>
 <table width="473" border="1" >
 <tr>
 <td width="567"><div align="left">
 <p class="judulutama">
 <center>ENTRY DATA TABUNGAN</center></p>
 <hr>
 <form enctype="multipart/form-data" method="post" 
 action="prosestambah.php" name="frmTabungan" id="frmTabungan" ">
 <table width="400" border="0" align="left" id="biodata">
 <tr>
 <td width="350">Nama Pemasukan</td>
 <td width="305"><input name="namamasuk" id="xnamamasuk" type="text" size="35" maxlength="50"/></td>
 </tr>
 <tr>
 <td width="250">Tanggal Pemasukan</td>
 <td><input name="tglmasuk" id="xtglmasuk" type="date" size="35" maxlength="30"/></td>
 </tr>
 <tr>
 <td width="250">Jumlah Pemasukan</td>
 <td width="305"><input name="jumlahmasuk" id="xjumlahmasuk" type="number" size="35" maxlength="30" onfocus="hitung();" /></td>
 </tr>
 <tr>
 <td></td>
 <td>
 <input type="submit" name="Submit" value=" SIMPAN " />
 <input type="reset" name="batal" value=" BATAL "/>
 <input type="button" name="keluar" value=" KELUAR " onClick="location.href=('index.php')"/>
 </td>
 </tr>
 </table>
 </form>
 </div></td>
 </tr>
 </table>
 </center>
</div> 
</body>
</html> 
