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
	<table class="table table-striped table-dark">
		<form "form-group" action="{{ route('penghuni.add') }}" method="post">
        {{ csrf_field() }}
		<table class="table table-striped table-dark">
			<tr>
			</tr>
			<tr>
				<td>ID</td>
				<td>
					<input type="text" name="id">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tgllahir"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jk"></td>
			</tr>
			<tr>
				<td>Kamar</td>
				<td><input type="text" name="kamar"></td>
			</tr>
			<tr>
				<td>NRP</td>
				<td><input type="text" name="nrp"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td><input type="text" name="nomortelepon"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
		</form>	
	</table>
	</div>
    </div>
  </div>
</body>