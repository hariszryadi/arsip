@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<style>
    .hidden {
        display: none !important;
    }
    .dt-buttons {
        margin: 0 !important;
    }
    .dt-buttons>.btn {
        border-radius: 0.25rem !important;
    }
    label {
        font-weight: bold;
    }
</style>
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Pengunjung</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Report</span>
                    <span class="breadcrumb-item active">Pengunjung</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Pengunjung</h3>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-lg-2">
                        <label for="filter-type">Jenis Arsip</label>
                        <select class="form-control select-search" id="type">
                            <option value="">All</option>
                            <option value="static">Statis</option>
                            <option value="inactive">Inaktif</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="filter-creator">Tangal awal</label>
                        <div class="input-group">
                            <span class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-calendar22"></i></span>
                            </span>
                            <input type="text" class="form-control datepicker" id="start-date" placeholder="dd-mm-yyy" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="filter-creator">Tangal akhir</label>
                        <div class="input-group">
                            <span class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-calendar22"></i></span>
                            </span>
                            <input type="text" class="form-control datepicker" id="end-date" placeholder="dd-mm-yyy" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group col-lg-2 align-self-end">
                        <button type="button" class="btn btn-secondary btn-block btn-filter">Filter</button>
                    </div>
                </div>

                <table class="table datatable-basic table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pengunjung</th>
                            <th>Alamat</th>
                            <th>NIK</th>
                            <th>No. Telepon</th>
                            <th>Statis</th>
                            <th>Inaktif</th>
                            <th>Tanggal</th>
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
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script>
        $(document).ready(function () {
            reportList();
        })

        $('.btn-filter').on('click', function () {
            reportList();
        })

        function reportList() {
            $('.datatable-basic').dataTable().fnDestroy();
            $('.datatable-basic').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                bLengthChange: true,
                bFilter: false,
                pageLength: 10,
                ajax: {
                    url: "{{ route('report-guest') }}",
                    data: function (d) {
                        d.type = $('#type').val()
                        d.start_date = $('#start-date').val(),
                        d.end_date = $('#end-date').val()
                    }
                },
                columns: [
                    {
                        data: "id", render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    { data: "fullname" },
                    { data: "address" },
                    { data: "nik" },
                    { data: "phone_number" },
                    { data: "static" },
                    { data: "inactive" },
                    { data: "created_at" }
                ],
                columnDefs: [
                    { width: "5%", "targets": [0] },
                    { className: "text-center", "targets": [5, 6] },
                ],
                dom: '<"datatable-header"flB><"datatable-scroll"t><"datatable-footer"ip>',
                language: {
                    search: '<span>Filter:</span> _INPUT_',
                    searchPlaceholder: 'Type to filter...',
                    lengthMenu: '<span>Show:</span> _MENU_',
                    paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
                },
                buttons: [
                    { 
                        extend: 'pdfHtml5',
                        title: getExportTitle(),
                        filename: 'Data Pengunjung',
                        exportOptions: {
                            format: {
                                body: function ( data, row, column, node ) {
                                    if (column == 0) {
                                        return row+1;
                                    } else {
                                        return data;
                                    }
                                }
                            }
                        },
                        customize: function (doc) {
                            doc.defaultStyle.fontSize = 8; //2, 3, 4,etc
                            doc.styles.tableHeader.fontSize = 10; //2, 3, 4, etc
                            doc.content[1].table.widths = [ '2%',  '22%', '22%', '15%', 
                                                            '15%', '5%', '5%', '14%'];
                        },
                        orientation: 'landscape' 
                    }
                ],
                "preDrawCallback": function( settings ) {
                    var btnsXls = $('.buttons-pdf');
                    btnsXls.addClass('btn btn-danger btn-sm mr-3 hidden');
                    btnsXls.html('<i class="icon-file-pdf"></i> Export PDF')
                    btnsXls.removeClass('dt-button');
                },
                "drawCallback": function(settings, json) {
                    var btnsXls = $('.buttons-pdf');
                    btnsXls.removeClass('hidden');
                },
                "initComplete": function(settings, json) {
                    var btnsXls = $('.buttons-pdf');
                    btnsXls.removeClass('hidden');
                }
            });
        }

        function getExportTitle() {
            if ($('#type').val() == '') {
                return 'REGISTER LAYANAN ARSIP STATIS & INAKTIF';
            } else {
                if ($('#type').val() == 'static') {
                    return 'REGISTER LAYANAN ARSIP STATIS';
                } else {
                    return 'REGISTER LAYANAN ARSIP INAKTIF';
                }
            }
        }

        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            todayHighlight: true,
            autoclose: true
        });
    </script>
@endsection
