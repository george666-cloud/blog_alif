<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<title>boyy</title>
	</head>
<body>
<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="photo/zAZCne-M.png" alt="" width="30" height="24" class="d-inline-block align-top">
     NAVBAR
    </a>
  </div>
</nav>
<h1>TUGASSSSS</h1>
	<div class="btn-group" role="group" aria-label="Basic example">
  <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>
</div> 
	<table class="table">
	<thead>
		<tr>
			<th scope="col"></th>
			<th scope="col">Nama</th>
			<th scope="col">Jabatan</th>
			<th scope="col">Umur</th>
			<th scope="col">Alamat</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pegawai as $p)
		<tr>
		<th scope="row">
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
			<div class="btn-group">
				<a href="/pegawai/edit/{{ $p->pegawai_id }} " class="btn btn-warning">Edit </a>
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-success">Hapus</a>
				</div>
			</td>
		</tr>
		@endforeach</th>
	</tbody>
	</table>
 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>