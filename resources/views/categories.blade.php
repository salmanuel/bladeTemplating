@extends('base')

@section('content')

    <table class="table table-dark table-hover table table-bordered">
    
        <thead>
        <tr>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>One</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Two</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Three</td>
        </tr>
        </tbody>
    </table>

  <style>
    table {
        background-color: rgb(65, 154, 65);
        top: 50px;
    }
  </style>
@endsection
