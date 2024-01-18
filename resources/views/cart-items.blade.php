@extends('frontend.layouts.master')

@section('content')

<div class="row mt-4">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>Product Name</th>
                    <th>Unit Price</th>
                    <th>Qty</th>
                    <th>Total Price</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->product->price }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ $item->product->price * $item->qty }}</td>
                </tr>
                @endforeach
            </tbody>
        <table>
    </div>
</div>

@endsection
