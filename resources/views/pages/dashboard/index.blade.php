@extends('layouts.app') @section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Selamat Datang!</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <div class="d-flex">
                            <h3>{{ $totalProgress }}</h3>
                            <i class="fas fa-cogs ml-auto p-2"></i>
                        </div>

                        <p class="font-weight-bold">Service Orders Progress</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <i class="fas fa-circle text-hide"></i>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <div class="d-flex">
                            <h3>{{ $totalSuccess }}</h3>
                            <i class="fas fa-check ml-auto p-2"></i>
                        </div>

                        <p class="font-weight-bold">Service Orders Success</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <i class="fas fa-circle text-hide"></i>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <div class="d-flex">
                            <h3>{{ $totalPending }}</h3>
                            <i class="fas fa-clock ml-auto p-2"></i>
                        </div>

                        <p class="font-weight-bold">Service Orders Pending</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <i class="fas fa-circle text-hide"></i>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <div class="d-flex">
                            <h3>{{ $totalCustomer }}</h3>
                            <i class="fas fa-user ml-auto p-2"></i>
                        </div>

                        <p class="font-weight-bold">Service Orders Customers</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <i class="fas fa-circle text-hide"></i>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection