@extends('layouts.app') @section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Users</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            @include('includes.error-card')
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (auth()->user()->role == 'ADMIN')
                        <button type="button" class="btn bg-navy" data-toggle="modal" data-target="#createUser"><i class="fa fa-plus"></i>
                            Tambah
                        </button>
                        @include('pages.user.create')
                        @endif
                        <table id="table-primary" class="table table-bordered">
                            <thead style="background: #f3f4f6">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    @if (auth()->user()->role == 'ADMIN')
                                    <th>Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        @include('includes.status-user')
                                    </td>
                                    @if (auth()->user()->role == 'ADMIN')
                                    <td>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-warning mr-2" data-toggle="modal" data-target="#updateUser{{ $item->id }}"><i class="fa fa-edit"></i>
                                            </button>
                                            @include('pages.user.update')

                                            <form id="formDelete{{ $item->id }}" action="{{ route('user.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <a type="button" class="btn btn-danger" onclick="handleDelete('{{ $item->id }}')" title="Hapus">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </form>

                                            <script>
                                                function handleDelete(id) {
                                                    Swal.fire({
                                                        title: 'Apakah kamu yakin?',
                                                        text: "kamu akan menghapus data ini!",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Ya, hapus!'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            document.getElementById('formDelete' + id).submit();
                                                        }
                                                    })
                                                }
                                            </script>
                                        </div>
                                    </td>
                                    @endif
                                </tr>
                                <?php $i++ ?>
                                @endforeach
                            </tbody>
                        </table>
                        </>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
</section>
@endsection
