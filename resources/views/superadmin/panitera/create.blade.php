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
                <form class="forms-sample" method="post" action="/superadmin/umum/panitera/create">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">NIP</label>
                        <input type="text" class="form-control" name="nip" placeholder="NIP">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="NIP">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Golongan</label>
                        <select name="golongan_id" class="js-example-basic-single w-100">
                            <option value="">-pilih-</option>
                            @foreach ($golongan as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Jabatan</label>
                        <select name="jabatan_id" class="js-example-basic-single w-100">
                            <option value="">-pilih-</option>
                            @foreach ($jabatan as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
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