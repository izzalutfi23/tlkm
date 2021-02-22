@extends('admin/layout/main')
@section('title', 'News')
@section('container')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">News</h3>
            <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
                <button type="button" data-toggle="modal" data-target="#tambah"
                    class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                    <i class="mdi mdi-plus-circle"></i> News</button>
                <!-- Tambah data -->
                <div class="modal fade bd-example-modal-lg" id="tambah" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add News</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{url('adm')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="text" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" name="file" required class="form-control">
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
                        <h4 class="card-title">News</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped" id="example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>File</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($news as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{!!substr($data->text, 0, 60)!!}...</td>
                                        <td><img src="{{Storage::url('public/news/'.$data->file)}}" class="img-fluid">
                                        </td>
                                        <td width="11%">
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#edit{{$data->news_id}}">Edit</button>
                                            <a onclick="return confirm('Data akan dihapus!')" href="{{url('adm/'.$data->news_id)}}"><button
                                                    class="btn btn-danger btn-sm">Hapus</button></a>
                                        </td>
                                    </tr>
                                    <!-- Edit data -->
                                    <div class="modal fade" id="edit{{$data->news_id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit News</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{url('adm/')}}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
														@method('patch')
                                                        <div class="form-group">
                                                            <label>Name</label>
															<input type="hidden" name="id" value="{{$data->news_id}}">
                                                            <input type="text" name="name" value="{{$data->name}}" required
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea name="text" id="mytextarea" class="form-control"
                                                                rows="3">{{$data->text}}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>File</label>
                                                            <input type="file" name="file"
                                                                class="form-control">
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
