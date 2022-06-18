@extends('layouts.admin.main')


@section('content')

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header d-sm-flex justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-primary">Product</h6>
            <button class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-download fa-sm text-white-50"></i> Add Product</button>
        </div>
        <div class="container card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-info text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead class="table-dark">
                        <tr> 
                            <th style="font-weight:bold;">No</th>
                            <td>Nama Kategori</td>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach ($category as $item)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                {{ $item->nama_kategori }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label for="name" class="form-label">Category : </label>
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"  autofocus required>
                </div>                

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onClick="store()">Save changes</button>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('script')
    <script>
        function store() {
            var category = $('#nama_kategori').val();
            $.ajax({
                type: "get",
                url: "{{ url('category/store') }}",
                data: "nama_kategori=" + category,
                success: function (response) {
                    $('.close').click();
                    $.get("{{ url('category') }}");
                    toastr.success('Data Berhasil Ditambahkan');                    
                }
            });
        }
    </script>
@endsection