@extends('layouts.app') @section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Service Orders</h1>
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
                        <button type="button" class="btn bg-navy mb-3" data-toggle="modal" data-target="#createServiceOrder">
                            <i class="fa fa-plus"></i>
                            Tambah
                        </button>
                        @include('pages.service-order.create')
                        <table id="table-primary" class="table table-bordered">
                            <thead style="background: #f3f4f6">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Problem</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>
                                        {{ $item->name }}
                                        <br>
                                        <small>
                                            {{ date_format(date_create($item->date), 'd/m/Y') }}
                                        </small>
                                    </td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        {{ $item->problem }}
                                        <br>
                                        <small>
                                            Rp. {{ $item->price }}
                                        </small>
                                    </td>
                                    <td>
                                        @include('includes.status-order')
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-secondary mr-2" data-toggle="modal" data-target="#updateStatus{{ $item->id }}">
                                                <i class="fa fa-user-check"></i>
                                            </button>
                                            @include('pages.service-order.change-status')

                                            <button type="button" class="btn btn-warning mr-2" data-toggle="modal" data-target="#updateServiceOrder{{ $item->id }}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            @include('pages.service-order.update')

                                            <form id="formDelete{{ $item->id }}" action="{{ route('service-order.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-danger" onclick="handleDelete('{{ $item->id }}')" title="Hapus">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>

                                            <script>
                                                function handleDelete(id) {
                                                    Swal.fire({
                                                        title: "Apakah kamu yakin?",
                                                        text: "kamu akan menghapus data ini!",
                                                        icon: "warning",
                                                        showCancelButton: true,
                                                        confirmButtonColor: "#3085d6",
                                                        cancelButtonColor: "#d33",
                                                        confirmButtonText: "Ya, hapus!",
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            document.getElementById("formDelete" + id).submit();
                                                        }
                                                    });
                                                }
                                            </script>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
