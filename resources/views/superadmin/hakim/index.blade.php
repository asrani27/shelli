@extends('layouts.app')
@push('css')

<link href="/theme/docs/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endpush
@section('content')

<div class="d-sm-flex align-items-right justify-content-between mb-4">
    <h1 class="h3 mb-2 text-gray-800">Hakim</h1>
    <a href="/superadmin/umum/hakim/create" class="btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                    NIP
                                </th>
                                <th>
                                    Nama
                                </th>
                                <th>
                                    Golongan
                                </th>
                                <th>
                                    Jabatan
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data as $item)

                            <tr>
                                <td class="py-1">
                                    {{$no++}}
                                </td>
                                <td>
                                    {{$item->nip}}
                                </td>
                                <td>
                                    {{$item->nama}}
                                </td>
                                <td>
                                    {{$item->jabatan->nama}}
                                </td>
                                <td>
                                    {{$item->golongan->nama}}
                                </td>
                                <td>
                                    <a href="/superadmin/umum/hakim/edit/{{$item->id}}" class="badge badge-success">
                                        Edit
                                    </a>
                                    <a href="/superadmin/umum/hakim/delete/{{$item->id}}" class="badge badge-danger">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

<script src="/theme/docs/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/theme/docs/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="/theme/docs/js/demo/datatables-demo.js"></script>
@endpush