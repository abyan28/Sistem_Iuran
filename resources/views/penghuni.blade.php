<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>


	<!-- Bootstrap core CSS-->
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
	
</head>
<body>
	<div class="container">
    <div class="card card-register">
      <div class="card-body">
	<table class="table table-striped table-dark">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Kamar</th>
			<th>NRP</th>
			<th>Alamat</th>
			<th>Nomor Telepon</th>
            <th>Opsi</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_penghuni as $d) {
        ?>
		<tr>
            <td><?=$d->Penghuni_ID;?></td>
			<td><?=$d->Penghuni_Nama;?></td>
            <td><?=$d->Penghuni_Tgllahir;?></td>
            <td><?=$d->Penghuni_JK;?></td>
			<td><?=$d->Penghuni_Kamar;?></td>
			<td><?=$d->Penghuni_NRP;?></td>
			<td><?=$d->Penghuni_Alamat;?></td>
			<td><?=$d->Penghuni_NoTelp;?></td>
            <td>
                <form method="get" action="{{ route('penghuni.formedit') }}">
                    <input type="hidden" name="id" value="<?php echo $d->Penghuni_ID ?>">
                    <button id="submit" name="submit" type="submit" value="edit">Edit</button>
                </form>
				|
				<a href="/penghuni/hapus/{{ $d->Penghuni_ID }}">Hapus</a>
            </td>
        </tr>
        <?php } ?>
	</table>
	</div>
    </div>
  </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>