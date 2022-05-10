@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Golongan</h4>
                <form class="forms-sample" action="/superadmin/umum/golongan/create" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Golongan</label>
                        <input type="text" class="form-control" name="nama" placeholder="Golongan">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="/superadmin/umum/golongan" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush