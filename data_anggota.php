
<!doctype>
<html>
<head>
<title>Form Anggota</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="konten">
<div class="kepala">
<div class="lock"></div>
<h2 class="judul">Data Anggota</h2>
</div>
<div class="artikel">
<form name="form" method="POST" action="aksi_anggota.php">
<div class="grup">
<strong><label>Nama Anggota</label></strong>
<input type="text" name="nama" placeholder="Nama Angota" required="required" /><br/>
</div>
<div class="grup">
<strong><label>NIS</label></strong>
<input type="text" name="NIS" placeholder="NIS" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Kelas</label></strong>
 <select name="kelas" id="gender_psn" > 
            <option value="X" selected>X</option> 
            <option value="XI">XI</option> 
            <option value="XII">XII</option> 
 
        </select>
<div class="grup">
<strong><label>Jenis Kelamin</label></strong>
 <select name="jk" id="gender_psn" > 
            <option value="Laki-laki" selected>Laki-laki</option> 
            <option value="Perempuan">Perempuan</option> 
 
        </select>
 
<center>
<div class="grup">
<input type="submit" name="submit" value="Simpan" />
</div>
<div class="grup">
<input type="reset" name="reset" value="Batal"/>
</div>
</form>
</div>
</div>
</body>
</html>