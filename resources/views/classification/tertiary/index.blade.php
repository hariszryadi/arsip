@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Klasifikasi Tersier</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Master</span>
                    <span class="breadcrumb-item active">Klasifikasi Tersier</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Klasifikasi Tersier</h3>
            </div>
            
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-lg-4">
                        <select class="form-control select-search" id="filter-primary" data-fouc>
                            <option value="">All Primer</option>
                            @foreach ($primaries as $item)
                                <option value="{{ $item->id }}">{{ $item->code }} - {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <select class="form-control select-search" id="filter-secondary" data-fouc>
                            <option value="">All Sekunder</option>
                            @foreach ($secondaries as $item)
                                <option value="{{ $item->id }}">{{ $item->code }} - {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <button type="button" class="btn btn-primary btn-block btn-filter">Filter</button>
                    </div>
                </div>

                <table class="table datatable-basic table-hover table-bordered striped table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
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
    <script>
        $(document).ready(function () {
            tertiaryClassificationList();
        })

        // $('#filter-primary').on('change', function () {
        //     alert($(this).val())
        // })

        $('.btn-filter').on('click', function () {
            tertiaryClassificationList();
        })

        function tertiaryClassificationList() {
            $('.datatable-basic').dataTable().fnDestroy();
            $('.datatable-basic').DataTable({
                processing: true,
                serverside: true,
                autoWidth: false,
                bLengthChange: true,
                pageLength: 10,
                ajax: {
                    url: "{{ route('tertiary-classification.index') }}",
                    data: function (d) {
                        d.filter_primary = $('#filter-primary').val(),
                        d.filter_secondary = $('#filter-secondary').val()
                    }
                },
                columns: [
                    {
                        data: "id", render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    { data: "code" },
                    { data: "name" },
                    { data: "description" },
                    { data: "action", orderable: false}
                ],
                columnDefs: [
                    { width: "5%", "targets": [0] },
                    { width: "15%", "targets": [1, 2] },
                    { width: "10%", "targets": [4] },
                    { className: "text-center", "targets": [4] }
                ],
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                language: {
                    search: '<span>Filter:</span> _INPUT_',
                    searchPlaceholder: 'Type to filter...',
                    lengthMenu: '<span>Show:</span> _MENU_',
                    paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
                }
            });
        }
    </script>
@endsection
