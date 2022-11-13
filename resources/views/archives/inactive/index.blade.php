@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Arsip Inaktif</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Data</span>
                    <span class="breadcrumb-item active">Arsip Inaktif</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Arsip Inaktif</h3>
            </div>
            
            <div class="card-body">
                <div class="form-group text-left">
                    <a href="{{ route('archives-inactive.create')}}" class="btn btn-primary mr-2"><i class="icon-file-plus"></i> Tambah</a>
                    <button type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#importModal"><i class="icon-file-excel"></i> Import</button>
                    <a href="{{ route('download-template-archive-inactive') }}" class="btn btn-warning"><i class="icon-file-download"></i> Template</a>
                </div>

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

<!-- Modal -->
<div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importModalLabel">Import Arsip</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="import-form" class="form-horizontal" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="customFile" accept=".xls,.xlsx">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btn-import">Import</button>
                    <span id="text-loading" style="padding: 6px; display: none;">Loading...</span>
                </div>
            </form>
        </div>
    </div>
</div>
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
                    url: "{{ route('archives-inactive.index') }}",
                },
                columns: [
                    {
                        data: "id", render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    { data: "name" },
                    { data: "mapping.code" },
                    { data: "mapping.archive_type" },
                    { data: "year" },
                    { data: "amount" },
                    { data: "dev_level" },
                    { data: "rack" },
                    { data: "box" },
                    { data: "action", orderable: false}
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
                }
            });

        })
        
        $(document).on('click', '#delete', function () {
            var id = $(this).attr('data-id');
            var url = "{{ route('archives-inactive.destroy', ":id") }}";
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

        $('#import-form').on('submit', function (e) {
            e.preventDefault();
            $('#btn-import').hide();
            $('#text-loading').show();
            $.ajax({
                url: "{{ route('archives-inactive.import') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: "json",
                success: function (data) {
                    $('#importModal').modal('hide');
                    swalInit.fire('Sukses!', data.success, 'success');
                    $('.datatable-basic').DataTable().ajax.reload();
                    $('#import-form')[0].reset();
                    $('.custom-file-label').text('Choose file');
                    $('#btn-import').show();
                    $('#text-loading').hide();
                },
                error: function(xhr, textStatus, error) {
                    var json = $.parseJSON(xhr.responseText);
                    $('#importModal').modal('hide');
                    swalInit.fire('Error!', json.errors, 'error');
                    $('#import-form')[0].reset();
                    $('.custom-file-label').text('Choose file');
                    $('#btn-import').show();
                    $('#text-loading').hide();
                }
            })
        })

        $(".custom-file-input").on("change", function(e){
            $('.custom-file-label').text(e.target.files[0].name);
        });

        $('#importModal').on('hidden.bs.modal', function (e) {
            $('#import-form')[0].reset();
            $('.custom-file-label').text('Choose file');
        });
    </script>
@endsection
