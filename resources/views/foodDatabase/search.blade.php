@extends('master')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Database</title>
    <style>
        th, td {
            padding: 15px;
            }
    </style>
</head>
<body>
    <div class="container"style="padding-bottom: 20px">
    <h1 style="display: flex; float: left">DB Food Sample</h1>
    <form class="form-inline my-2 my-lg-0" style="display: flex; float: right" type="get" action="{{ url('/search') }}">
        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search Foods" aria-label="Search">
        <input class="form-control mr-sm-2" type="number" name="min_calories" placeholder="Min Calories" value="0">   
        <input class="form-control mr-sm-2" type="number" name="max_calories" placeholder="Max Calories" value="1000"> 
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
<table>
        <tr>
            <th>Name</th>
            <th>Calories</th>
            <th>Fat</th>
            <th>Protein</th>
            <th>Carbohydrate</th>
            <th>Fiber</th>
            <th>Water</th>
        </tr>

        @foreach ($food as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->Calories}}</td>
            <td>{{ $item->Fat }}</td>
            <td>{{ $item->Protein}}</td>
            <td>{{ $item->Carbohydrate }}</td>
            <td>{{ $item->Fiber }}</td>
            <td>{{ $item->Water }}</td>
            </tr>
        @endforeach



    </table>
@endsection