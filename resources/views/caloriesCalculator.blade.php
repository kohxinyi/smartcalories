@extends('master')
@section('content')  


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Calorie Intake Calculator</title>
  <!-- MDB icon -->
  <link rel="icon" type="image/png"
    href="https://user-images.githubusercontent.com/34577873/43033510-24d8f684-8cd4-11e8-9b07-d22248354f59.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Start your project here-->

  <header>
    <nav class="navbar navbar-dark orange">
      <span
        style="color: blue; font-size: 23px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><i
          class="fas fa-calculator"></i> Calorie Calculator</span>
    </nav>
  </header>

  <main>

    <!-- Score -->
    @if(isset($calories))
    <p class="text-center font-weight-bold" style="font-size: large;">Your Result</p>
    <div id="Final" class="card text-center"
      style="max-width: 50rem; margin: auto; border: 6px solid orange; width: 90%; margin-top: 45px; background-color:#fff176; border-radius: 20px; color:#ff6d00; margin-bottom: 30px">
      <br>
      <table border="4">
        <tr>
          <th>Gender</th>
          <th>Age</th>
          <th>Weight</th>
          <th>Height</th>
          <th>Exercise level/Activity</th>
        </tr>
        <tr>
          <td>{{$calories->c_gender}}</td>
          <td>{{$calories->c_age}}</td>
          <td>{{$calories->c_weight}}</td>
          <td>{{$calories->c_height}}</td>
          <td>{{$calories->c_exercise_level}}</td>
      </table>

      <table style="margin-top: 15px;">
        <tr>
          <td class="T" style="font-weight: bold;">Maintain weight <p></p>
          </td>
          <td><div id="a" class="SS">{{$calories->c_maintain_weight}}</div><div class="CD">Calories/day</div></td>
        </tr>
        <tr>
          <td class="T" style="font-weight: bold;">Weight loss <p
              style="font-size: small; color:#888; font-weight: lighter;">0.5 kg/week</p>
          </td>
          <td><div id="b" class="SS">{{$calories->c_weight_loss}}</div><div class="CD">Calories/day</div></td>
        </tr>
        <tr>
          <td class="T" style="font-weight: bold;">Weight gain <p
              style="font-size: small; color:#888; font-weight: lighter;">0.5 kg/week</p>
          </td>
          <td><div id="c" class="SS">{{$calories->c_weight_gain}}</div><div class="CD">Calories/day</div></td>
        </tr>
      </table>
    </div>
    @endif


    <p class="text-center font-weight-bold" style="margin-top: 25px; font-size: large;">Insert your data below to calculate your recommended calories intake!</p>
    <div class="card text-center border-warning-color-dark"
      style="max-width: 50rem; margin: auto; border: 3px solid orange; width: 50%; margin-top: 30px; min-width: 20rem;">

      <form method="post" action="{{url('calories/calculation')}}">
        @csrf
      <table class="table" style="border-spacing: 0rem;">
          <tr>
            <td class="T">Gender</td>
            <td class="I">
              <input type="radio" name="gender" value="male" id="male" checked="checked"> Male &nbsp &nbsp
              <input type="radio" name="gender" value="female" id="female"> Female
            </td>
          </tr>
          <tr>
            <td colspan="2" style="background-color: blue"></td>
          </tr>
          <tr>
            <td class="T">Age</td>
            <td class="I" id="AT"><input type="number" min="0" id="age" name="age" placeholder=""
                style="border-width: 2px; border-color: rgb(255, 123, 0); border-radius: 5px;" required=""><div style="display: none;" id="ATT">Please enter valid number</div></td>
          </tr>
          <tr>
            <td colspan="2" style="background-color: blue"></td>
          </tr>
          <tr>
            <td class="T">Weight</td>
            <td class="I"><input type="number" min="0" id="weight" name="weight" 
                style="border-width: 2px; border-color: rgb(255, 123, 0); border-radius: 5px;" placeholder="Kg" required=""><div style="display: none;" id="WTT">Please enter valid number</div></td>
          </tr>
          <tr>
            <td colspan="2" style="background-color: blue"></td>
          </tr>
          <tr>
            <td class="T">Height</td>
            <td class="I"><input type="number" min="0" id="height" name="height" 
                style="border-width: 2px; border-color: rgb(255, 123, 0); border-radius: 5px;" placeholder="Cm" required=""><div style="display: none;" id="HTT">Please enter valid number</div></td>
          </tr>
          <tr>
            <td colspan="2" style="background-color: blue"></td>
          </tr>
        <tr>
          <td class="T">Exercise level<p>/Activity</p></td>
          <td>
            <select class="custom-select custom-select-sm" name="exerciseLevel" 
              style="width: 70%; margin: auto; border-width: 2px; border-color: rgb(255, 123, 0); border-radius: 5px; margin-top: 12px;"> <!--KONO DIO DA -->
              <option value="0" selected="">Basal Metabolic Rate (BMR)</option>
              <option value="1">Little/No exercise</option>
              <option value="2">Low activity (exercise 1-3 times/week)</option>
              <option value="3">Active (daily exercise or intense exercise 3-4 times/week)</option>
              <option value="4">High activity (intense exercise 6-7 times/week)</option>
              <option value="5">Very high activity (very intense exercise daily, or physical job)</option>
            </select>
          </td>
        </tr>
        <tr>
            <td colspan="2" style="background-color: blue"></td>
        </tr>
        <tr>
          <td colspan="2">
            <button type="submit"  class="btn btn-primary" style="width: 300px; margin: auto; margin-bottom: 25px; border-radius: 25px;">Calculate</button>
            <!-- <button id="B" type="button" onclick="calc()" class="btn btn-amber" style="width: 300px; margin: auto; margin-bottom: 25px; border-radius: 25px;">Calculate</button> -->
          </td>
        </tr>
      </table>
      </form>
      </div>

  </main>
  

  <!-- End your project here--> 

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript" src="js/calculator.js"></script>

</body>


@endsection

