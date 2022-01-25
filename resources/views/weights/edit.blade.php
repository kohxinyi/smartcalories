@extends('master')

@section('content')
    <!-- header -->
<div class="container">
    <h2 class="display-1">My Weight</h2>
</div>

<form action="/weight/{{$weight->id}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  @if (session('success'))
  <div class="alert alert-success">
      {{ session('success')}}
  </div>
  @endif

  <input type="decimal" class="form-control" name="weight" value="{{old('weight', '$weight->weight')}}" id="weight" placeholder="Enter Weight"><br>
  @error('weight')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  <input type="datetime" class="form-control" name="date" value="{{old('date', '$weight->date')}}" id="date" placeholder="Enter Date"><br>
  @error('date')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  <input type="time" class="form-control" name="time" value="{{old('time', '$weight->time')}}" id="time" placeholder="Enter Time"><br>
  @error('time')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  <button type="Submit" class="btn btn-primary mt-4">Add Weight</button>
</form>

        @forelse ($weights as $item => $weights)
        <div class="col-3 align-self-start" style="margin-top: 2%; margin-left: 20%;">
          <div class="row"><span class="font-weight-bold mr-2">Date: </span>{{$weights->date}} </div>
          <div class="row"><span class="font-weight-bold mr-2">Weight: </span>{{$weights->weight}} kg</div>
        </div>
        <div class="col-2 align-self-start mt-4 ">
          <a href="/weight/{{$weights->id}}/edit"><i class="btn btn-primary bi bi-pencil mr-6"></i></a>
        </div> 
        @empty
        <div class="col-3 align-self-start" style="margin-top: 2%; margin-left: 20%;">
          <div class="row"><span class="font-weight-bold mr-2">Date: </span></div>
          <div class="row"><span class="font-weight-bold mr-2">Weight: </span></div>
        </div>
        
        @endforelse          
        </div>

    </div>      
</div>
@endsection