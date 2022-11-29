@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Usul Serah</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Data</span>
                    <span class="breadcrumb-item active">Usul Serah</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Usul Serah</h3>
            </div>
            
            <div class="card-body">

                <table class="table datatable-basic table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Arsip</th>
                            <th>Klasifikasi</th>
                            <th>Jenis Arsip</th>
                            <th>Tahun</th>
                            <th>Jumlah</th>
                            <th>Tingkat Perkembangan</th>
                            <th>Lokasi Rak</th>
                            <th>Box</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
    <!-- /content area -->

</div>
<!-- /inner content -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.datatable-basic').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                bLengthChange: true,
                pageLength: 10,
                ajax: {
                    url: "{{ route('archives-over.index') }}",
                },
                columns: [
                    {
                        data: "id", render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    { data: "name" },
                    { data: "code" },
                    { data: "archive_type" },
                    { data: "year" },
                    { data: "amount" },
                    { data: "dev_level" },
                    { data: "rack" },
                    { data: "box" }
                ],
                columnDefs: [
                    { width: "5%", "targets": [0] },
                    { className: "text-center", "targets": [7] }
                ],
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                language: {
                    search: '<span>Filter:</span> _INPUT_',
                    searchPlaceholder: 'Type to filter...',
                    lengthMenu: '<span>Show:</span> _MENU_',
                    paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
                },
            });

        })
    </script>
@endsection
