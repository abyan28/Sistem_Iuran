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
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Sistem Informasi Iuran Kontrakan</h2>
                <p>Cari Data Penghuni :</p>
                <div class="row">
                <div class="col-md-3">
                <form action="{{ route('penghuni.cari') }}" method="GET" class="form-inline">
                    <input class="form-control" type="text" name="cari" placeholder="Cari Penghuni..." value="{{ old('cari') }}">
                    <input class="btn btn-success" type="submit" value="CARI">
                    
                </form>
                </div>
                <div class="col-md-3">
                <a href="{{ route('penghuni.formadd') }}" class="btn btn-primary">TAMBAH</a>
                </div>
                </div>
                <table class="table table-striped table-info">
                    <thead class="thead-light">
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
                            <th></th>
                            <th>Foto</th>
                            <th>Keterangan</th>
                        <tr>
                    </thead>
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
                                <input class="btn btn-warning btn-sm" id="submit" name="submit" type="submit" value="EDIT">
                            </form>
                            
                        </td>
                        <td>
                            <form method="get" action="{{ route('penghuni.delete') }}">
                                <input type="hidden" name="id" value="<?php echo $d->Penghuni_ID ?>">
                                <input class="btn btn-danger btn-sm" id="submit" name="submit" type="submit" value="HAPUS">
                            </form>
                        </td>
                        <td><img width="150px" src="{{ url('/data_file/'.$d->File) }}"></td>
                        <td><?=$d->Keterangan;?></td>
                    </tr>
                    </div>
                    <?php } ?>
                </table>
    
                Halaman             : {{ $list_penghuni->currentPage() }} <br/>
                Jumlah Data         : {{ $list_penghuni->total() }} <br/>
                Data per Halaman    : {{ $list_penghuni->perPage() }} <br/>

                {{ $list_penghuni->links() }}

	        </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>