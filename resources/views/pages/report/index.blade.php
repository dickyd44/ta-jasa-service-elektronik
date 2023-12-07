@extends('layouts.app') @section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Report Orders</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table-export" class="table table-bordered">
                            <thead style="background: #f3f4f6">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Problem</th>
                                    <th>Status</th>
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