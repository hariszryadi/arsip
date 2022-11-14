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
                <h4>Mapping</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Master</span>
                    <span class="breadcrumb-item active">Mapping</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Mapping</h3>
            </div>
            
            <div class="card-body">
                <div class="form-group text-left">
                    <a href="{{ route('mapping.create')}}" class="btn btn-primary"><i class="icon-file-plus"></i> Tambah</a>
                </div>

                <div class="row">
                    <div class="form-group col-lg-5">
                        <label for="filter-primary">Klasifikasi</label>
                        <select class="form-control select-search" id="filter-primary" data-fouc>
                            <option value="">All</option>
                            @foreach ($primaries as $item)
                                <option value="{{ $item->code }}">{{ $item->code }} - {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-5">
                        <label for="filter-archive-type">Jenis arsip</label>
                        <input type="text" class="form-control" id="filter-archive-type" placeholder="Ketik jenis arsip">
                    </div>
                    <div class="form-group col-lg-2 align-self-end">
                        <button type="button" class="btn btn-secondary btn-block btn-filter">Filter</button>
                    </div>
                </div>

                <table class="table datatable-basic table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Klasifikasi</th>
                            <th>Jenis Arsip</th>
                            <th>Keamanan</th>
                            <th>Retensi</th>
                            <th>Aktif</th>
                            <th>Inaktif</th>
                            <th>Aksi</th>
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
            mappingList();
        })

        $('.btn-filter').on('click', function () {
            mappingList();
        })

        function mappingList() {
            $('.datatable-basic').dataTable().fnDestroy();
            $('.datatable-basic').DataTable({
                processing: true,
                serverside: true,
                autoWidth: false,
                bLengthChange: true,
                bFilter: false,
                pageLength: 10,
                ajax: {
                    url: "{{ route('mapping.index') }}",
                    data: function (d) {
                        d.filter_primary = $('#filter-primary').val(),
                        d.filter_archive_type = $('#filter-archive-type').val()
                    }
                },
                columns: [
                    {
                        data: "id", render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    { data: "name" },
                    { data: "archive_type" },
                    { data: "security" },
                    { data: "retention" },
                    { data: "active" },
                    { data: "inactive" },
                    { data: "action", orderable: false}
                ],
                columnDefs: [
                    { width: "5%", "targets": [0] },
                    { className: "text-center", "targets": [5, 6, 7] }
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
                        filename: 'Data Mapping',
                        exportOptions: {
                            columns: ':not(:last-child)',
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
                    },
                    { 
                        extend: 'pdfHtml5',
                        title: '',
                        filename: 'Data Mapping',
                        exportOptions: {
                            columns: ':not(:last-child)',
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
                        orientation: 'landscape'
                    }
                ],
                "preDrawCallback": function( settings ) {
                    var btnsXls = $('.buttons-excel');
                    var btnsPdf = $('.buttons-pdf');
                    btnsXls.addClass('btn btn-success btn-sm mr-3 hidden');
                    btnsXls.html('<i class="icon-file-excel"></i> Export Excel')
                    btnsXls.removeClass('dt-button');
                    btnsPdf.addClass('btn btn-danger btn-sm mr-3 hidden');
                    btnsPdf.html('<i class="icon-file-pdf"></i> Export Pdf')
                    btnsPdf.removeClass('dt-button');
                },
                "drawCallback": function(settings, json) {
                    var btnsXls = $('.buttons-excel');
                    var btnsPdf = $('.buttons-pdf');
                    btnsXls.removeClass('hidden');
                    btnsPdf.removeClass('hidden');
                },
                "initComplete": function(settings, json) {
                    var btnsXls = $('.buttons-excel');
                    var btnsPdf = $('.buttons-pdf');
                    btnsXls.removeClass('hidden');
                    btnsPdf.removeClass('hidden');
                }
            });
        }
        
        $(document).on('click', '#delete', function () {
            var id = $(this).attr('data-id');
            var url = "{{ route('mapping.destroy', ":id") }}";
            url = url.replace(':id', id);

            swalInit.fire({
                title: "Apakah anda yakin akan menghapus data ini?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Kembali"
            }).then(function(result) {
                if(result.value) {
                    $.ajax({
                        url: url,
                        method: "DELETE",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (resp) {
                            // $('.datatable-basic').DataTable().ajax.reload();
                            mappingList();
                            swalInit.fire('Sukses!', resp.success, 'success');
                        },
                        error: function (xhr, status, error) {
                            swalInit.fire('Error!', xhr.responseText, 'error');
                        }
                    })
                }
            });
        })
    </script>
@endsection
