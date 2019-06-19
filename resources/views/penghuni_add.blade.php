<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


	<!-- Bootstrap core CSS-->
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">

	
</head>
<body>
	<div class="container">
		<div class="card card-register mx-auto mt-5">
			<div class="card-body">
					<a href="{{ route('penghuni.all') }}" class="btn btn-primary">KEMBALI</a>
					<table class="table table-striped table-dark">
						@if (count($errors) > 0)
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

						<form "form-group" action="{{ route('penghuni.add') }}" method="post">
						{{ csrf_field() }}
						<table class="table table-striped table-dark">
							<tr>
							</tr>
							<tr>
								<td>ID</td>
								<td>
									<input type="text" name="id" class='form-control' value="{{ old('id') }}">
								</td>
							</tr>
							<tr>
								<td>Nama</td>
								<td>
									<input type="text" name="nama" class='form-control' value="{{ old('nama') }}">
								</td>
							</tr>
							<tr>
								<td>Tanggal Lahir</td>
								<td><input type="date" name="tgllahir" class='form-control' value="{{ old('tgllahir') }}"></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td><input type="text" name="jk" class='form-control' value="{{ old('jk') }}"></td>
							</tr>
							<tr>
								<td>Kamar</td>
								<td><input type="text" name="kamar" class='form-control' value="{{ old('kamar') }}"></td>
							</tr>
							<tr>
								<td>NRP</td>
								<td><input type="text" name="nrp" class='form-control' value="{{ old('nrp') }}"></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td><input type="text" name="alamat" class='form-control' value="{{ old('alamat') }}"></td>
							</tr>
							<tr>
								<td>Nomor Telepon</td>
								<td><input type="text" name="nomortelepon" class='form-control' value="{{ old('nomortelepon') }}"></td>
							</tr>
							<tr>
								<td></td>
								<td><input class="btn btn-secondary" type="submit" value="Simpan"></td>
							</tr>
						</table>
						</form>	
					</table>
			</div>
		</div>
	</div>
</body>