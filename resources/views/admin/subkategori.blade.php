@extends('admin/layout/main')
@section('title', 'Sub Kategori')
@section('container')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Sub Kategori</h3>
            <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
                <button type="button" data-toggle="modal" data-target="#tambah"
                    class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                    <i class="mdi mdi-plus-circle"></i> Sub Kategori</button>
                <!-- Tambah data -->
                <div class="modal fade bd-example-modal-lg" id="tambah" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Sub Kategori</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{url('subkategori')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="categories_id" class="form-control">
                                            @foreach($kat as $dkat)
                                            <option value="{{$dkat->category_id}}">{{$dkat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Sub Kategori</label>
                                        <input type="text" name="name" required class="form-control">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary"
                                    style="padding: 7px 7px 7px 7px;">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End tambah data -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kategori</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped" id="example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Sub Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($subkat as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->kategori->name}}</td>
                                        <td>{{$data->name}}</td>
                                        <td width="11%">
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#edit{{$data->id}}">Edit</button>
                                            <a onclick="return confirm('Data akan dihapus!')" href="{{url('subkategori/'.$data->id)}}"><button
                                                    class="btn btn-danger btn-sm">Hapus</button></a>
                                        </td>
                                    </tr>
                                    <!-- Edit data -->
                                    <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{url('subkategori/')}}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
														@method('patch')
                                                        <div class="form-group">
                                                        <label>Kategori</label>
                                                        <input type="hidden" name="id" value="{{$data->id}}">
                                                        <select name="categories_id" class="form-control">
                                                            @foreach($kat as $dkat)
                                                            <option {{($dkat->category_id==$data->categories_id?'selected':'')}} value="{{$dkat->category_id}}">{{$dkat->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sub Kategori</label>
                                                        <input type="text" name="name" value="<?=$data->name?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary"
                                                        style="padding: 7px 7px 7px 7px;">Edit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End edit data -->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                IJAB QOBUL 2021</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                    href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a>
                from Bootstrapdash.com</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->

<!-- Datatable -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

</script>


@endsection
