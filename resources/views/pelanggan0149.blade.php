<!DOCTYPE html>
<html>
<head>
<title>1461900149</title>
</head>
<body>
<h3>DATA USER</h3>
<p>CARI : <form action="/pelanggan/cari" method="GET"></p>
<input type="text" name="lihat" placeholder="Cari Pelanggan .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
<br>
<form action="/pelanggan/kamar" method="GET">
<input type="text" name="lihat" placeholder="Cari Barang" value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>

<a href="/pelanggan/tambah"> + Pelanggan Baru </a>
<br/>
<br/>
<table border="1">
<tr>
<th>Id</th>
<th>Nama</th>
<th>Alamat</th>
</tr>
@foreach($pelanggan as $p)
<tr>
<td>{{ $p->id }}</td>
<td>{{ $p->nama }}</td>
<td>{{ $p->alamat }}</td>
<td>
<a href="/pelanggan/edit/{{ $p->id }}">Edit</a>
|
<a href="/pelanggan/hapus/{{ $p->id }}">Hapus</a>
</td>
</tr>
@endforeach
</table>
</body>
</html>