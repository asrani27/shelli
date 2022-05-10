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
                <h4 class="card-title">Update Data T R K</h4>
                <form class="forms-sample" method="post" action="/superadmin/sidang/update_trk/{{$data->id}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Tanggal</label>
                        <input type="text" class="form-control" name="nip" value="{{$data->perkara->tanggal}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nomor Perkara</label>
                        @if ($data->jenis_perkara == 1)
                        <input type="text" class="form-control" name="nip" value="PDN0.{{$data->perkara->id}}" readonly>
                        @elseif ($data->jenis_perkara == 2)
                        <input type="text" class="form-control" name="nip" value="PDT0.{{$data->perkara->id}}" readonly>
                        @elseif ($data->jenis_perkara == 3)
                        <input type="text" class="form-control" name="nip" value="TPK0.{{$data->perkara->id}}" readonly>
                        @elseif ($data->jenis_perkara == 4)
                        <input type="text" class="form-control" name="nip" value="PHI0.{{$data->perkara->id}}" readonly>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Penggugat</label>
                        <input type="text" class="form-control" name="nama_penggugat"
                            value="{{$data->perkara->nama_penggugat}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Tergugat</label>
                        <input type="text" class="form-control" name="nama_tergugat"
                            value="{{$data->perkara->nama_tergugat}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Tanggal Sidang</label>
                        <input type="date" class="form-control" name="tanggal_sidang" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Ruangan</label>
                        <input type="text" class="form-control" name="ruangan" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Keputusan</label>
                        <input type="text" class="form-control" name="keputusan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1"></label>
                        <input type="hidden" class="form-control" name="jenis_perkara"
                            value="{{$data->perkara->jenis_perkara}}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
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