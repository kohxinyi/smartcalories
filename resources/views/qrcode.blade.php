@extends('master')
@section('content') 
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>My Body QR Code</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>

    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <h2>My Body QR Code</h2>
            </div>
            <div class="card-body" style="margin:auto">
            {!! $qrcode !!}
            </div>
        </div>
        <a href="../profile"><i style="margin: 10px"class="btn btn-primary mr-6">Back to Profile</i></a>
    </div>
</body>
</html>
@endsection