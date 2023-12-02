@extends('layouts.document')

@section('content')
<div class="invoice p-3 mb-2"> {{-- mb-3 --}}

    <div class="row">
        <div class="col-12">
            <h4>
                <i class="fas fa-globe"></i> A&H - Tekhnik.
                <small class="float-right">Date: {{ $item->date }}</small>
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
            <b>Payment Due:</b> {{ $item->date }}<br>
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
                        <td>{{ $item->date }}</td>
                        <td><p class="badge badge-danger">Belum Bayar</p></td>
                        <td>Rp. {{ $item->price }}</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

    <div class="row">

        <div class="col-6">
            <p class="lead">Payment Methods:</p>
            <img src="../../dist/img/credit/mandiri.png" alt="mandiri" height="45" width="63">
            <img src="../../dist/img/credit/bca.png" alt="bca" height="45" width="50">
            <img src="../../dist/img/credit/bni.png" alt="bni">
            <img src="../../dist/img/credit/bri.png" alt="bri" height="50" width="55">
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

<div style="border-block-end: 3px dashed black"></div>

<div class="invoice p-3 mt-2"> {{-- mb-3 --}}

    <div class="row">
        <div class="col-12">
            <h4>
                <i class="fas fa-globe"></i> A&H - Tekhnik.
                <small class="float-right">Date: {{ $item->date }}</small>
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
            <b>Payment Due:</b> {{ $item->date }}<br>
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
                        <td>{{ $item->date }}</td>
                        <td><p class="badge badge-danger">Belum Bayar</p></td>
                        <td>Rp. {{ $item->price }}</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

    <div class="row">

        <div class="col-6">
            <p class="lead">Payment Methods:</p>
            <img src="../../dist/img/credit/mandiri.png" alt="mandiri" height="45" width="63">
            <img src="../../dist/img/credit/bca.png" alt="bca" height="45" width="50">
            <img src="../../dist/img/credit/bni.png" alt="bni">
            <img src="../../dist/img/credit/bri.png" alt="bri" height="50" width="55">
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
@endsection
