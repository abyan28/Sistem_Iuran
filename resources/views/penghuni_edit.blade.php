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
					<?php
						foreach ($list_penghuni as $d) {
					?>
					<form "form-group" action="{{ route('penghuni.edit') }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<table class="table table-striped table-dark">
						<tr>
						</tr>
						<tr>
							<td>Nama</td>
							<td>
								<input type="hidden" name="id" value="{{ $d->Penghuni_ID }}">
								<input type="text" name="nama" value="{{ $d->Penghuni_Nama }}">
							</td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td><input type="date" name="tgllahir" value="{{ $d->Penghuni_Tgllahir }}"></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td><input type="text" name="jk" value="{{ $d->Penghuni_JK }}"></td>
						</tr>
						<tr>
							<td>Kamar</td>
							<td><input type="text" name="kamar" value="{{ $d->Penghuni_Kamar }}"></td>
						</tr>
						<tr>
							<td>NRP</td>
							<td><input type="text" name="nrp" value="{{ $d->Penghuni_NRP }}"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input type="text" name="alamat" value="{{ $d->Penghuni_Alamat }}"></td>
						</tr>
						<tr>
							<td>Nomor Telepon</td>
							<td><input type="text" name="nomortelepon" value="{{ $d->Penghuni_NoTelp }}"></td>
						</tr>
						<tr>
							<td>Foto</td>
							<td><input type="file" name="file" value="{{ $d->File }}"></td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td><input type="text" name="keterangan" value="{{ $d->Keterangan }}"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Simpan"></td>
						</tr>
					</table>
					</form>	
					<?php } ?>
				</table>
			</div>
		</div>
 	</div>
</body>