@extends('layouts.app')

@section('content')
    @isset ($products)
        @foreach ($products as $item)
            <p>Product Name: {{$item->id}}</p>
            <p>Product Name: {{$item->prodName}}</p>
            <p>Product Description: {{$item->prodDescription}}</p>
            <p>Price: {{$item->Price}}</p>
            <p>Status: {{$item->isAvailable === 1 ? "TRUE" : "FALSE"}}</p>
        @endforeach
    @endisset
@endsection

@section('scripts')
    <script>
        var data = @json($products);
        console.log(data);
    </script>
@endsection