@extends('layouts.app')
@push('css')

<link href="/theme/docs/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endpush
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-2 text-gray-800">Sidang Perdata</h1>
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
                                    Tanggal
                                </th>
                                <th>
                                    Nomor Perkara
                                </th>
                                <th>
                                    Nama Penggugat
                                </th>
                                <th>
                                    Nama Tergugat
                                </th>
                                <th>
                                    Hakim
                                </th>
                                <th>
                                    Jaksa
                                </th>
                                <th>
                                    Penitera
                                </th>
                                <th>
                                    Tgl Sidang
                                </th>
                                <th>
                                    Ruangan
                                </th>
                                <th>
                                    Keputusan
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
                                    {{$item->perkara->tanggal}}
                                </td>
                                <td>
                                    @if ($item->jenis_perkara == 1)
                                    PDN0.{{$item->perkara->id}}
                                    @elseif ($item->jenis_perkara == 2)
                                    PDT0.{{$item->perkara->id}}
                                    @elseif ($item->jenis_perkara == 3)
                                    TPK0.{{$item->perkara->id}}
                                    @elseif ($item->jenis_perkara == 4)
                                    PHI0.{{$item->perkara->id}}
                                    @endif
                                </td>
                                <td>
                                    {{$item->perkara->nama_penggugat}}
                                </td>
                                <td>
                                    {{$item->perkara->nama_tergugat}}
                                </td>
                                <td>
                                    {{$item->perkara->hakim == null ? '':$item->perkara->hakim->nama}}
                                </td>
                                <td>
                                    {{$item->perkara->jaksa == null ? '':$item->perkara->jaksa->nama}}
                                </td>
                                <td>
                                    {{$item->perkara->panitera == null ? '':$item->perkara->panitera->nama}}
                                </td>
                                <td>
                                    {{$item->tanggal_sidang}}
                                </td>
                                <td>
                                    {{$item->ruangan}}
                                </td>
                                <td>
                                    {{$item->keputusan}}
                                </td>
                                <td>
                                    <a href="/superadmin/sidang/pdt/delete/{{$item->id}}" class="badge badge-danger">
                                        Delete
                                    </a>
                                    <a href="/superadmin/sidang/pdt/update_trk/{{$item->id}}"
                                        class="badge badge-primary">
                                        Update T R K
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
<script src="/theme/docs/js/demo/datatables-demo.js"></script>

@endpush