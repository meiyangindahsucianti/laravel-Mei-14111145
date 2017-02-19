@extends('layout.default')
@section('content')
<form action='../../../../../xampp/htdocs/Tugas_4/insert.php' method='POST'>
<table border="1" width="60%" align="center">
<tr>
<th><align ="center" colspan="2">Tambah data</th>
</tr>

<tr>
	<td>Nama</td>
	<td><Input style="text" name="nama" size="80"></td>
</tr>
<tr>
	<td>Nim</td>
	<td><input type=" text" name="nim" size="80"></td>
</tr>
<tr>
	<td>Alamat</td>
	<td><input type=" text" name="alamat" size="80"></td>
</tr>
<td colspan="2" align="right"><input type="submit" value="simpan"/><input type="button" value="batal" /></td>
</tr>
</table>
</form>
@stop
