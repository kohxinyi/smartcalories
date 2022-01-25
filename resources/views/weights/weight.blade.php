@extends('master')

@section('content')
<style>
        th, td {
            /* padding: 15px; */
            min-width: 125px;
            }
    </style>
    <!-- header -->
<div class="container">
    <h2 class="display-1">My Weight</h2>
</div>

<form action="/add-weight/{profile->id}" method="POST" enctype="multipart/form-data">
  @csrf

  @if (session('success'))
  <div class="alert alert-success">
      {{ session('success')}}
  </div>
  @endif

  <input type="decimal" class="form-control" name="weight" value="{{old('weight', '')}}" id="weight" placeholder="Enter Weight"><br>
  @error('weight')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  <input type="date" class="form-control" name="date" value="{{old('date', '')}}" id="date" placeholder="Enter Date"><br>
  @error('date')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  <input type="time" class="form-control" name="time" value="{{old('time', '')}}" id="time" placeholder="Enter Time"><br>
  @error('time')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  <button type="Submit" class="btn btn-primary mt-4">Add Weight</button>
</form>
<div class="col-3 align-self-start" style="margin-top: 2%; margin-left: 20%;">
<table>
  <tr>
    <th>Date</th>
    <th>Time</th>
    <th>Weight</th>
    <th>Action</th>
  </tr>
@forelse ($weights as $item => $weights)
  <tr>
    <td>{{$weights->date}} </td>
    <td>{{$weights->time}}</td>
    <td>{{$weights->weight}} kg</td>
    <td><a href="/weight/{{$weights->id}}/edit"><i class="btn btn-primary bi bi-pencil mr-6"></i></a></td>
  </tr>
        
  @empty
  <tr>
  <div class="col-3 align-self-start" style="margin-top: 2%; margin-left: 20%;">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </div>
  </tr>
  @endforelse
</table>
          </div>
                  
        </div>

    </div>      
</div>
@endsection