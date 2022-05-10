@extends('layouts.app')
@push('css')

@endpush
@section('content')<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Golongan</h4>
                <form class="forms-sample" action="/superadmin/umum/golongan/edit/{{$data->id}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Golongan</label>
                        <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <a href="/superadmin/umum/golongan" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush