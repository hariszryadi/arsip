@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Klasifikasi</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Master</span>
                    <span class="breadcrumb-item active">Klasifikasi</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Klasifikasi</h3>
            </div>
            
            <div class="card-body">
                <div class="form-group text-left">
                    @can('classification-create')
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-file-plus"></i> Tambah
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('classification.create') }}">Klasifikasi Primer</a>
                                <a class="dropdown-item" href="{{ route('classification-secondary.create') }}">Klasifikasi Sekunder</a>
                                <a class="dropdown-item" href="{{ route('classification-tertiary.create') }}">Klasifikasi Tersier</a>
                            </div>
                        </div>
                    @endcan
                </div>

                <table class="table datatable-basic table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            {{-- <th>Kategori</th> --}}
                            <th>Kode</th>
                            <th>Nama</th>
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
        var table = $('.datatable-basic').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            bLengthChange: true,
            pageLength: 10,
            ajax: {
                url: "{{ route('classification.index') }}",
            },
            columns: [
                {
                    className: 'dt-control',
                    orderable: false,
                    data: null,
                    defaultContent: '',
                },
                // { data: "category" },
                { data: "code" },
                { data: "name" },
                { data: "action", orderable: false }
            ],
            columnDefs: [
                { width: "5%", "targets": [0] },
                { className: "text-center", "targets": [3] }
            ],
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            }
        });

        /* Formatting function for row details - modify as you need */
        function format_secondary(d) {
            var child_table = "";
            $.ajax({
                url: "{{ route('classification-get-secondary') }}",
                method: "POST",
                async: false,
                data: {
                    primary_id: d
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (resp) {
                    // console.log(resp.data);
                    if (resp.data.length > 0) {
                        $.each(resp.data, function (i, v) {
                            var url = "{{ route('classification.secondary.edit', ":id") }}";
                            url = url.replace(':id', v.id);
                            
                            child_table += '<tr>'+
                                    '<td class="dt-control-secondary" data-id='+v.id+'></td>'+
                                    '<td>'+v.code+'</td>'+
                                    '<td>'+v.name+'</td>'+
                                    '<td>'+v.description+'</td>'+
                                    '<td class=" text-center">'+
                                        '<div class="list-icons">'+
                                            '<div class="dropdown">'+
                                                '<a href="#" class="list-icons-item" data-toggle="dropdown">'+
                                                    '<i class="icon-menu9"></i>'+
                                                '</a>'+
                                                '<div class="dropdown-menu dropdown-menu-right">'+
                                                    '<a href="'+url+'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>'+
                                                    '<a href="javascript:void(0)" id="delete-secondary" data-id="'+v.id+'" class="dropdown-item"><i class="icon-bin text-danger"></i> Hapus</a>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</td>'+
                                '</tr>';
                        })
                    } else {
                        child_table += '<tr><td colspan="5" class="text-center">Not data available in table</td></tr>'
                    }
                },
                error: function (error) {
                    var responseText=JSON.parse(error.responseText);
                    console.log(responseText.messages);
                }
            })

            return '<table id="secondary-table" width="100%">'+
                        '<thead>'+
                            '<tr style="background-color: #01534A; color: #fff">'+
                                '<th>#</th>'+
                                '<th>Kode</th>'+
                                '<th>Nama</th>'+
                                '<th>Deskripsi</th>'+
                                '<th>Aksi</th>'+
                            '</tr>'+
                        '</thead>'+
                        '<tbody>'+
                            child_table+
                        '</tbody>'+
                    '</table>';
        }

        // Add event listener for opening and closing details
        $('.table tbody').on('click', 'td.dt-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('dt-hasChild shown');
            } else {
                // Open this row
                row.child(format_secondary(row.data().id)).show();
                tr.addClass('dt-hasChild shown');
            }
        });

        /* Formatting function for row details - modify as you need */
        function format_tertiary(d, c) {
            var child_table = "";
            $.ajax({
                url: "{{ route('classification-get-tertiary') }}",
                method: "POST",
                async: false,
                data: {
                    secondary_id: d
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (resp) {
                    // console.log(resp.data);
                    if (resp.data.length > 0) {
                        c.addClass('dt-hasChild shown');
                        $.each(resp.data, function (i, v) {
                            var url = "{{ route('classification.tertiary.edit', ":id") }}";
                            url = url.replace(':id', v.id);
                            
                            child_table += '<tr>'+
                                    '<td>'+v.code+'</td>'+
                                    '<td>'+v.name+'</td>'+
                                    '<td>'+v.description+'</td>'+
                                    '<td class=" text-center">'+
                                        '<div class="list-icons">'+
                                            '<div class="dropdown">'+
                                                '<a href="#" class="list-icons-item" data-toggle="dropdown">'+
                                                    '<i class="icon-menu9"></i>'+
                                                '</a>'+
                                                '<div class="dropdown-menu dropdown-menu-right">'+
                                                    '<a href="'+url+'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>'+
                                                    '<a href="javascript:void(0)" id="delete-tertiary" data-id="'+v.id+'" class="dropdown-item"><i class="icon-bin text-danger"></i> Hapus</a>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</td>'+
                                '</tr>';
                        })
                    } else {
                        c.addClass('dt-hasChild shown');
                        child_table += '<tr><td colspan="4" class="text-center">Not data available in table</td></tr>'
                    }
                },
                error: function (error) {
                    var responseText=JSON.parse(error.responseText);
                    console.log(responseText.messages);
                }
            })

            return '<tr>'+
                        '<td colspan="5">'+
                            '<table id="tertiary-table" width="100%">'+
                                '<thead>'+
                                    '<tr style="background-color: #01534A; color: #fff">'+
                                        '<th>Kode</th>'+
                                        '<th>Nama</th>'+
                                        '<th>Deskripsi</th>'+
                                        '<th>Aksi</th>'+
                                    '</tr>'+
                                '</thead>'+
                                '<tbody>'+
                                    child_table+
                                '</tbody>'+
                            '</table>'+
                        '</td>'+
                    '</tr>';
        }

        /* Formatting function for row details - modify as you need */
        $('.table tbody').on('click', '#secondary-table tbody td.dt-control-secondary', function () {
            var id = $(this).attr('data-id');
            var tr = $(this).closest('tr');

            if (tr.hasClass('shown')) {
                // This row is already open - close it
                tr.removeClass('dt-hasChild shown');
                tr.next('tr').remove()
            } else {
                // Open this row
                // tr.addClass('dt-hasChild shown');
                tr.after(format_tertiary(id, tr));
            }
        });
    })

    $(document).on('click', '#delete', function () {
        var id = $(this).attr('data-id');
        var url = "{{ route('classification.destroy', ":id") }}";
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
                        $('.datatable-basic').DataTable().ajax.reload();
                        swalInit.fire('Sukses!', resp.success, 'success');
                    },
                    error: function (xhr, status, error) {
                        swalInit.fire('Error!', xhr.responseText, 'error');
                    }
                })
            }
        });
    })

    $(document).on('click', '#delete-secondary', function () {
        var id = $(this).attr('data-id');
        var url = "{{ route('classification-secondary.destroy', ":id") }}";
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
                        $('.datatable-basic').DataTable().ajax.reload();
                        swalInit.fire('Sukses!', resp.success, 'success');
                    },
                    error: function (xhr, status, error) {
                        swalInit.fire('Error!', xhr.responseText, 'error');
                    }
                })
            }
        });
    })

    $(document).on('click', '#delete-tertiary', function () {
        var id = $(this).attr('data-id');
        var url = "{{ route('classification-tertiary.destroy', ":id") }}";
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
                        $('.datatable-basic').DataTable().ajax.reload();
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
