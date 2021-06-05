<!DOCTYPE html>
<html>
<head>
<title>1461900149</title>
</head>
<body>
<h3>Tambah Pelanggan</h3>
<a href="/pelanggan"> Kembali</a>
<br/>
<br/>
<form action="/pelanggan/store" method="post">
{{ csrf_field() }}
Id <input type="text" name="id" required="required"> <br/>
Nama <input type="text" name="nama" required="required"> <br/>
Alamat <textarea name="alamat" required="required"></textarea> <br/>
<input type="submit" value="Simpan Data">
</form>
</body>
</html>