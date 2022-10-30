@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Banner</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Pengaturan</span>
                    <span class="breadcrumb-item active">Banner</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Banner</h3>
            </div>
            
            <div class="card-body">
                <div class="form-group text-left">
                    <a href="{{ route('banner.create')}}" class="btn btn-primary"><i class="icon-file-plus"></i> Tambah</a>
                </div>

                <table class="table datatable-basic table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Caption</th>
                            <th>Status</th>
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
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
        $(document).ready(function () {
            $('.datatable-basic').DataTable({
                processing: true,
                serverside: true,
                autoWidth: false,
                bLengthChange: true,
                pageLength: 10,
                ajax: {
                    url: "{{ route('banner.index') }}",
                },
                columns: [
                    {
                        data: "id", render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    {
                        data: "image",
                        render: function (data, type, full, meta) {
                            return `<a href="{{ asset('storage/${data}') }}" data-fancybox="images">
                                            <img src="{{ asset('storage/${data}') }}" alt="" class="img-rounded img-preview">
                                       </a>`;
                        },
                        orderable: false
                    },
                    { data: "caption" },
                    { data: "status" },
                    { data: "action", orderable: false}
                ],
                columnDefs: [
                    { width: "5%", "targets": [0] },
                    { width: "15%", "targets": [4] },
                    { width: "20%", "targets": [3] },
                    { className: "text-center", "targets": [1, 3, 4] }
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
            var url = "{{ route('banner.destroy', ":id") }}";
            url = url.replace(':id', id);

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
        })

        $(document).on('change', '.switch', function () {
            var id = $(this).attr('data-id');
            $.ajax({
                url: "{{ route('banner.update-status') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {id:id},
                success: function (resp) {
                    $('.datatable-basic').DataTable().ajax.reload();
                    swalInit.fire('Sukses!', resp.success, 'success');
                },
                error: function (xhr, status, error) {
                    swalInit.fire('Error!', xhr.responseText, 'error');
                }
            })
        })
    </script>
@endsection
