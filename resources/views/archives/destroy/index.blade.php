@extends('layouts.app')

@section('content')
<!-- Inner content -->
<div class="content-inner">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4>Usul Musnah</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item">Data</span>
                    <span class="breadcrumb-item active">Usul Musnah</span>
                </div>

            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Usul Musnah</h3>
            </div>
            
            <div class="card-body">
                <div class="form-group text-left">
                    @can('archives-destroy-delete')
                        <button type="button" class="btn btn-danger delete_all"><i class="icon-bin"></i> Hapus Semua</button>
                    @endcan
                </div>

                <table class="table datatable-basic table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="master"></th>
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
                    url: "{{ route('archives-destroy.index') }}",
                },
                columns: [
                    { data: "form"},
                    { data: "name" },
                    { data: "code" },
                    { data: "archive_type" },
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
                },
                'columnDefs': [{ 'orderable': false, 'targets': 0 }], // hide sort icon on header of first column
                'aaSorting': [[1, 'asc']] // start to sort data in second column 
            });

        })
        
        $(document).on('click', '#delete', function () {
            var id = $(this).attr('data-id');
            var url = "{{ route('archives-destroy.destroy', ":id") }}";
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

                    $("input[type='checkbox']").prop('checked', false)
                }
            });
        })

        $('#master').on('click', function(e) {
            if($(this).is(':checked',true)) {
                $(".sub_chk").prop('checked', true);  
            } else {  
                $(".sub_chk").prop('checked',false);  
            }  
        });


        $('.delete_all').on('click', function(e) {
            var allVals = [];  
            $(".sub_chk:checked").each(function() {  
                allVals.push($(this).attr('data-id'));
            });  


            if (allVals.length <= 0) {  
                swalInit.fire('Error!', 'Pilih minimal 1 data usul musnah', 'error');
            }  else {  
                swalInit.fire({
                    title: "Apakah anda yakin akan menghapus semua data ini?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya, Hapus!",
                    cancelButtonText: "Kembali"
                }).then(function(result) {
                    if(result.value) {
                        var join_selected_values = allVals.join(","); 
        
                        $.ajax({
                            url: "{{ route('archives-destroy.destroy_all') }}",
                            type: 'DELETE',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: 'ids='+join_selected_values,
                            success: function (resp) {
                                $('.datatable-basic').DataTable().ajax.reload();
                                swalInit.fire('Sukses!', resp.success, 'success');
                            },
                            error: function (xhr, status, error) {
                                swalInit.fire('Error!', xhr.responseText, 'error');
                            }
                        });
        
        
                        $("input[type='checkbox']").prop('checked', false)
                    }
                });
            }  
        });

    </script>
@endsection
