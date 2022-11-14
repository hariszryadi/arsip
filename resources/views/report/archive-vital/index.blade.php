@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
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
                <h4>Arsip Vital</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Report</span>
                    <span class="breadcrumb-item active">Arsip Vital</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Arsip Vital</h3>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-lg-5">
                        <label for="filter-creator">Pencipta arsip</label>
                        <select class="form-control select-search" id="filter-creator" data-fouc>
                            <option value="">All</option>
                            @foreach ($creator as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-5">
                        @php
                            $first = (int)date('Y') - 30;
                            $last = (int)date('Y') + 5;
                        @endphp
                        <label for="filter-year">Tahun</label>
                        <select name="year" class="form-control select-search" id="filter-year" data-fouc>
                            <option value="">All</option>
                            @for ($i = $first; $i < $last; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-lg-2 align-self-end">
                        <button type="button" class="btn btn-secondary btn-block btn-filter">Filter</button>
                    </div>
                </div>

                <table class="table datatable-basic table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Arsip</th>
                            <th>Klasifikasi</th>
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
                serverside: true,
                autoWidth: false,
                bLengthChange: true,
                bFilter: false,
                pageLength: 10,
                ajax: {
                    url: "{{ route('report-archive-vital') }}",
                    data: function (d) {
                        d.filter_creator = $('#filter-creator').val(),
                        d.filter_year = $('#filter-year').val()
                    }
                },
                columns: [
                    {
                        data: "id", render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    { data: "name" },
                    { data: "code_classification" },
                    { data: "year" },
                    { data: "amount" },
                    { data: "dev_level" },
                    { data: "rack" },
                    { data: "box" }
                ],
                columnDefs: [
                    { width: "5%", "targets": [0] }
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
                        extend: 'excelHtml5',
                        title: '',
                        filename: 'Data Arsip Vital',
                        exportOptions: {
                            // columns: ':not(:last-child)',
                            format: {
                                body: function ( data, row, column, node ) {
                                    if (column == 0) {
                                        return row+1;
                                    } else {
                                        return data;
                                    }
                                }
                            }
                        } 
                    }
                ],
                "preDrawCallback": function( settings ) {
                    var btnsXls = $('.buttons-excel');
                    btnsXls.addClass('btn btn-success btn-sm mr-3 hidden');
                    btnsXls.html('<i class="icon-file-excel"></i> Export Excel')
                    btnsXls.removeClass('dt-button');
                },
                "drawCallback": function(settings, json) {
                    var btnsXls = $('.buttons-excel');
                    btnsXls.removeClass('hidden');
                },
                "initComplete": function(settings, json) {
                    var btnsXls = $('.buttons-excel');
                    btnsXls.removeClass('hidden');
                }
            });
        }
    </script>
@endsection
