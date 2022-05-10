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
                <h4 class="card-title">Update Data H J P</h4>
                <form class="forms-sample" method="post" action="/superadmin/perkara/perdata/hjp/{{$data->id}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Tanggal</label>
                        <input type="text" class="form-control" name="nip" value="{{$data->tanggal}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nomor Perkara</label>
                        <input type="text" class="form-control" name="nip" value="PDN0.{{$data->id}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Penggugat</label>
                        <input type="text" class="form-control" name="nama_penggugat" value="{{$data->nama_penggugat}}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Alamat Penggugat</label>
                        <input type="text" class="form-control" name="alamat_penggugat"
                            value="{{$data->alamat_penggugat}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Tergugat</label>
                        <input type="text" class="form-control" name="nama_tergugat" value="{{$data->nama_tergugat}}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Alamat Tergugat</label>
                        <input type="text" class="form-control" name="alamat_tergugat"
                            value="{{$data->alamat_tergugat}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Judul Perkara</label>
                        <input type="text" class="form-control" name="judul_perkara" value="{{$data->judul_perkara}}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Deskripsi Perkara</label>
                        <input type="text" class="form-control" name="deskripsi_perkara"
                            value="{{$data->deskripsi_perkara}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Hakim</label>
                        <select name="hakim_id" class="js-example-basic-single w-100" required>
                            <option value="">-pilih-</option>
                            @foreach ($hakim as $item)
                            <option value="{{$item->id}}" {{$data->hakim_id == $item->id ?
                                'selected':''}}>{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Jaksa</label>
                        <select name="jaksa_id" class="js-example-basic-single w-100" required>
                            <option value="">-pilih-</option>
                            @foreach ($jaksa as $item)
                            <option value="{{$item->id}}" {{$data->jaksa_id == $item->id ?
                                'selected':''}}>{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Panitera</label>
                        <select name="panitera_id" class="js-example-basic-single w-100" required>
                            <option value="">-pilih-</option>
                            @foreach ($panitera as $item)
                            <option value="{{$item->id}}" {{$data->panitera_id == $item->id ?
                                'selected':''}}>{{$item->nama}}</option>
                            @endforeach
                        </select>
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