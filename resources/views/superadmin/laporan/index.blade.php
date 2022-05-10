@extends('layouts.app')
@push('css')

<link href="/theme/docs/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endpush
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-2 text-gray-800">Laporan</h1>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="/laporan/hakim/cetak" class="btn btn-sm btn-primary shadow-sm" target="_blank">Data Hakim</a>
                <a href="/laporan/jaksa/cetak" class="btn btn-sm btn-primary shadow-sm" target="_blank">Data Jaksa</a>
                <a href="/laporan/panitera/cetak" class="btn btn-sm btn-primary shadow-sm" target="_blank">Data
                    Panitera</a>
                <a href="/laporan/datapidana/cetak" class="btn btn-sm btn-primary shadow-sm" target="_blank">Data
                    Pidana</a>
                <a href="/laporan/dataperdata/cetak" class="btn btn-sm btn-primary shadow-sm" target="_blank">Data
                    Perdata</a>
                <a href="/laporan/datatipikor/cetak" class="btn btn-sm btn-primary shadow-sm" target="_blank">Data
                    Tipikor</a>
                <a href="/laporan/dataphi/cetak" class="btn btn-sm btn-primary shadow-sm" target="_blank">Data PHI</a>
                <a href="/laporan/sidangpidana/cetak" class="btn btn-sm btn-primary shadow-sm" target="_blank">Sidang
                    Pidana</a>
                <a href="/laporan/sidangperdata/cetak" class="btn btn-sm btn-primary shadow-sm" target="_blank">Sidang
                    Perdata</a>
                <a href="/laporan/sidangtipikor/cetak" class="btn btn-sm btn-primary shadow-sm" target="_blank">Sidang
                    Tipikor</a>
                <a href="/laporan/sidangphi/cetak" class="btn btn-sm btn-primary shadow-sm" target="_blank">Sidang
                    PHI</a>
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