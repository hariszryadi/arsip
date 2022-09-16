@extends('layouts.app')

@section('content')
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

                <table class="table datatable-basic table-hover table-bordered striped table-responsive">
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
    <script>
        $(document).ready(function () {
            $('.datatable-basic').DataTable({
                processing: true,
                serverside: true,
                autoWidth: false,
                bLengthChange: true,
                pageLength: 10,
                ajax: {
                    url: "{{ route('mapping.index') }}",
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
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                language: {
                    search: '<span>Filter:</span> _INPUT_',
                    searchPlaceholder: 'Type to filter...',
                    lengthMenu: '<span>Show:</span> _MENU_',
                    paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
                }
            });

        })
        
        $(document).on('click', '#delete', function () {
            var id = $(this).attr('data-id');
            var url = "{{ route('mapping.destroy', ":id") }}";
            url = url.replace(':id', id);
            var disabled = $(this).attr('disabled');

            if (disabled) {
                return false;
            } else {
                swalInit.fire({
                    title: "Apakah Anda Yakin Akan Menghapus Data ini?",
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
            }
        })
    </script>
@endsection