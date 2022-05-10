@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="/theme/template/vendors/select2/select2.min.css">
<link rel="stylesheet" href="/theme/template/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
@endpush
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Panitera</h4>
                <form class="forms-sample" method="post" action="/superadmin/daftar/jadwal">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Tanggal</label>
                        <input type="text" class="form-control" name="tanggal"
                            value="{{\Carbon\Carbon::now()->format('Y-m-d')}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Penggugat</label>
                        <input type="text" class="form-control" name="nama_penggugat" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Alamat Penggugat</label>
                        <input type="text" class="form-control" name="alamat_penggugat" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Telp Penggugat</label>
                        <input type="text" class="form-control" name="telp_penggugat" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Tergugat</label>
                        <input type="text" class="form-control" name="nama_tergugat" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Alamat Tergugat</label>
                        <input type="text" class="form-control" name="alamat_tergugat" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Telp Tergugat</label>
                        <input type="text" class="form-control" name="telp_tergugat" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Judul Perkara</label>
                        <input type="text" class="form-control" name="judul_perkara" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Deskripsi Perkara</label>
                        <input type="text" class="form-control" name="deskripsi_perkara" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Jenis Perkara</label>
                        <select name="jenis_perkara" class="js-example-basic-single w-100" required>
                            <option value="">-pilih-</option>
                            <option value="1">Pidana</option>
                            <option value="2">Perdata</option>
                            <option value="3">Tipikor</option>
                            <option value="4">PHI</option>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button class="btn btn-light">Kembali</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

<script src="/theme/template/vendors/select2/select2.min.js"></script>
<script src="/theme/template/js/select2.js"></script>
@endpush