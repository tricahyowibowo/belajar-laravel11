<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<style type="text/css">
	.pagination a{
		float: left;
		list-style-type: none;
		margin:5px;
	}
</style>

<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->nama_pegawai }}</td>
			<td>{{ $p->jabatan_pegawai }}</td>
			<td>{{ $p->umur_pegawai }}</td>
			<td>{{ $p->alamat_pegawai }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->id_pegawai }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->id_pegawai }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

	<br/>
	Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>
 
 
	{{ $pegawai->links() }}
 
 
</body>
</html>