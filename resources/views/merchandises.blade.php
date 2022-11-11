@extends('base')

@section('content')

    <table class="table table-dark table-hover table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Brand Name</th>
                <th>Product Name</th>
                <th>Retail Price</th>
                <th>Wholesale Price</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <th>Xiaomi</th>
                <th>Redmi</th>
                <th>9,499 Php</th>
                <th>10,000 Php</th>
            </tr>
            <tr>
                <th>2</th>
                <th>Oppo</th>
                <th>Kalabasa</th>
                <th>50,499 Php</th>
                <th>3,000 Php</th>
            </tr>
            <tr>
                <th>3</th>
                <th>Apple</th>
                <th>Bungi</th>
                <th>1,499 Php</th>
                <th>99,999 Php</th>
            </tr>
            <tr>
                <th>4</th>
                <th>Vivo</th>
                <th>League</th>
                <th>8,499 Php</th>
                <th>11,499 Php</th>
            </tr>
        </tbody>
    </table>
@endsection