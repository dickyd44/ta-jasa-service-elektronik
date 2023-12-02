@extends('layouts.document')

@section('content')
<div class="invoice p-3">

    <div class="row">
        <div class="col-12">
            <h4>
                <i class="fas fa-globe"></i> A&H - Tekhnik.
                <small class="float-right">Date: {{ date_format(date_create($item->date), 'd/m/Y') }}</small>
            </h4>
        </div>

    </div>

    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            From
            <address>
                <strong class="badge bg-secondary">{{ request()->session()->get('user')['role']}}</strong><br>
                <strong>{{ request()->session()->get('user')['name']}}</strong><br>
                Tiban Indah McDermott<br>
                Blok G. no 17, 29426<br>
                Phone: {{ request()->session()->get('user')['phone']}}<br>
                Email: {{ request()->session()->get('user')['email']}}
            </address>
        </div>

        <div class="col-sm-4 invoice-col">
            To
            <address>
                <strong>{{ $item->name }}</strong><br>
                {{ $item->address }}<br>
                Phone: {{ $item->phone }}<br>
            </address>
        </div>

        <div class="col-sm-4 invoice-col">
            <b>Invoice #00{{ $item->id }}</b><br>
            <br>
            <b>Order ID:</b> {{ $item->id }}<br>
            <b>Payment Due:</b> {{ date_format(date_create($item->date), 'd/m/Y') }}<br>
        </div>

    </div>


    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-header border">
                <thead style="background: #eee">
                    <tr>
                        <th>Invoice</th>
                        <th>Problem</th>
                        <th>Amount Due</th>
                        <th>Status</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#00{{ $item->id }}</td>
                        <td>{{ $item->problem }}</td>
                        <td>{{ date_format(date_create($item->date), 'd/m/Y') }}</td>
                        <td>
                            @include('includes.status-order')
                        </td>
                        <td>Rp. {{ $item->price }}</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

    <div class="row">

        <div class="col-6">
            <p class="lead">Payment Methods:</p>
            <img src="../../dist/img/credit/mandiri.svg" alt="mandiri" width="70" class="pr-2">
            <img src="../../dist/img/credit/bca.svg" alt="bca" width="70" class="pr-2">
            <img src="../../dist/img/credit/bni.svg" alt="bni" width="70" class="pr-2">
            <img src="../../dist/img/credit/bri.svg" alt="bri" width="77" class="pr-2">
            <img src="../../dist/img/credit/qris.svg" alt="qris" width="100">
            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                Pembayaran bisa melalui transfer Debit yang tertera di atas.
            </p>
        </div>

        <div class="col-6">
            <p class="lead">Note:</p>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>Rp. 30.000</td>
                        </tr>
                        <tr>
                            <th>Tax</th>
                            <td>Rp. 10.000</td>
                        </tr>
                        <tr>
                            <th>Shipping:</th>
                            <td>Rp. 5.000</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>Rp. {{ $item->price }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- <div style="border-block-end: 3px dashed black"></div> -->
@endsection
