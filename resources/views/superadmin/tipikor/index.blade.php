@extends('layouts.app')
@push('css')

<link href="/theme/docs/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endpush
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-2 text-gray-800">Data Tipikor</h1>
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
                                    {{$item->tanggal}}
                                </td>
                                <td>
                                    @if ($item->jenis_perkara == 1)
                                    PDN0.{{$item->id}}
                                    @elseif ($item->jenis_perkara == 2)
                                    PDT0.{{$item->id}}
                                    @elseif ($item->jenis_perkara == 3)
                                    TPK0.{{$item->id}}
                                    @elseif ($item->jenis_perkara == 4)
                                    PHI0.{{$item->id}}
                                    @endif
                                </td>
                                <td>
                                    {{$item->nama_penggugat}}
                                </td>
                                <td>
                                    {{$item->nama_tergugat}}
                                </td>
                                <td>
                                    {{$item->hakim == null ? '':$item->hakim->nama}}
                                </td>
                                <td>
                                    {{$item->jaksa == null ? '':$item->jaksa->nama}}
                                </td>
                                <td>
                                    {{$item->panitera == null ? '':$item->panitera->nama}}
                                </td>
                                <td>
                                    <a href="/superadmin/perkara/tipikor/hjp/{{$item->id}}" class="badge badge-success">
                                        H J P
                                    </a>
                                    <a href="/superadmin/perkara/tipikor/delete/{{$item->id}}"
                                        class="badge badge-danger">
                                        Delete
                                    </a>
                                    @if ($item->sidang == null)
                                    <a href="/superadmin/perkara/tipikor/sidang/{{$item->id}}"
                                        class="badge badge-primary">
                                        Lanjut ke Sidang
                                    </a>
                                    @endif
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