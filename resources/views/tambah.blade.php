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

	
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>

	<form class="row g-3 needs-validation" action="/pegawai/store" method="post">
		{{ csrf_field() }}
			<div class="col-md-4">
    		<label for="nama" class="form-label">Nama</label></>
			<input type="text" name="nama"  class="form-control @error('nama') is-invalid @enderror"  id="nama">
			@error('nama')
			<div class="invalid-feedback">{{ $message }}
        	@enderror
			</div>
			</div>
			<div class="col-md-4">
    		<label for="jabatan" class="form-label">Jabatan</label>
			<input type="text" name="jabatan"  class="form-control @error('jabatan') is-invalid @enderror" id="jabatan"> 
			@error('jabatan')
			<div class="invalid-feedback">{{ $message }}
        	@enderror
			</div>
			</div>
			<div class="col-md-4">
    		<label for="umur" class="form-label">Umur</label>
			<input type="text" name="umur"  class="form-control @error('umur') is-invalid @enderror" id="umur"> 
			@error('umur')
			<div class="invalid-feedback">{{ $message }}
        	@enderror
			</div>
			</div>
			<div class="col-md-4">
    		<label for="alamat" class="form-label">Alamat</label>
			<textarea name="alamat"  class="form-control @error('alamat') is-invalid @enderror"  id="alamat"></textarea>	
			@error('alamat')
			<div class="invalid-feedback">{{ $message }}
        	@enderror
			</div>
			</div>
			<div class="col-12">
    		<button class="btn btn-primary" type="submit">Submit</button>
  			</div>
	</form>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>