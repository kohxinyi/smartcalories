@extends('master')

@section('content')
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

.rcorners-main {
  border-radius: 25px;
  margin: auto;
  padding: 8px 20px;
  width: 92%;
  height: 150px;
  margin-top: 10px;
}

.rcorners-meals {
  border-radius: 25px;
  margin: auto;
  padding: 8px 20px;
  width: 48%;
  height: 100px;
  /* margin-top: 10px; */
  margin: 5px; 
}

.my-meal-bar {
  display: flex;
  padding: 5px;
  flex-direction: row;
  flex-wrap: wrap;
}

</style>

<body class="w3-light-grey">



<!-- Page Container -->
<div>
  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://www.w3schools.com/w3images/avatar_hat.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>{{ Auth::user()->name }}</h2>
          </div>
        </div>
        <div class="w3-container">
        <table style="width: 100%; margin-top: 5px; margin-bottom: 0px">
            <tr>
              <td><i class="fa fa-intersex fa-fw w3-large w3-text-amber"></i></td>
              <td>{{$user->gender}}</td>
              <!--  $profile->gender  -->
            </tr>
            <tr>
              <td><p class=" w3-large w3-text-amber">-W-</p></td>
              <td>56.4 kg</td>
            </tr>
            <tr>
              <td><p class=" w3-large w3-text-amber">-H-</p></td>
              <td>171.0 cm</td>
            </tr>
            <tr>
              <td><p class=" w3-large w3-text-amber">BMI</p></td>
              <td>19.2 kg/m2</td>
              <!-- round($profile->weight / ($profile->height*0.01) / ($profile->height*0.01),2) -->
            </tr>
          </table>

         
          
          <!-- <p><i class="fa fa-intersex fa-fw w3-margin-right w3-large w3-text-amber"></i>Female</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-amber"></i>56.4 kg</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-amber"></i>171.0 cm</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-amber"></i>19.2 kg/m2</p> -->
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-amber"></i>My Goals</b></p>
          <p>Calories to Consume</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-amber" style="width:90%">90%</div>
          </div>
          <!-- <p>Photography</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-amber" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div> -->
          <!-- <p>Illustrator</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-amber" style="width:75%">75%</div>
          </div> -->
          <!-- <p>Media</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-amber" style="width:50%">50%</div>
          </div> -->
          <br>

          <!-- <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-amber"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-amber" style="height:24px;width:100%"></div>
          </div>
          <p>Spanish</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-amber" style="height:24px;width:55%"></div>
          </div>
          <p>German</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-amber" style="height:24px;width:25%"></div>
          </div> -->
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <!-- My Meal -->
    <div class="w3-twothird">
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-coffee fa-fw w3-margin-right w3-xxlarge w3-text-amber"></i>My Meals</h2>
        <div class="w3-container my-meal-bar">
        <div class="w3-container w3-pale-red rcorners-meals">
                <h3>Breakfast</h3>
                <div style="float: right">
                <h4>--102 kcal--</h4>
                </div>
            </div>
            <div class="w3-container w3-pale-yellow rcorners-meals">
                <h3>Lunch</h3>
                <div style="float: right">
                <h4>--1290 kcal--</h4>
                </div>
            </div>
            <div class="w3-container w3-pale-green rcorners-meals">
                <h3>Dinner</h3>
                <div style="float: right">
                <h4>--1350 kcal--</h4>
                </div>
            </div>

            <div class="w3-container w3-pale-blue rcorners-meals">
                <h3>Snack</h3>
                <div style="float: right">
                <h4>--310 kcal--</h4>
                </div>
            </div>
            <!-- button -->
        </div>
        <br>
      </div>

      <!-- Weight Review -->
      <div class="w3-half" style="padding-right: 5px">
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-user fa-fw w3-margin-right w3-xxlarge w3-text-amber"></i>Weight Review</h2>
        
        <div class="w3-container">
            <!-- Weight line graph -->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Weight(KG)'],
          ['17/01',  57.2],
          ['18/01',  56.9],
          ['19/01',  55.5],
          ['20/01',  56.4]
        ]);

        var options = {
          title: 'My Weight',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
        <div id="curve_chart" style="width: 330px; height: 500px"></div>

        </div>
        <br>
      </div>
      </div>
      

      <!-- Meal Review -->
      <div class="w3-half"  style="padding-left: 5px">
      <div class="w3-container w3-card w3-white">
        
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-amber"></i>Meal Review</h2>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Nutrition', 'grams'],
          ['Fat',     21.02 ],
          ['Protein',      75.12],
          ['Carbohydrate',  165.17],
          ['Fiber',  35.2],
          ['Water',  35.09]
        ]);

        var options = {
          
          pieHole: 0.25,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
        <div id="donutchart" style="width: 330px; height: 400px;"></div>

        <!-- <div class="w3-container">
          <h5 class="w3-opacity"><b>W3Schools.com</b></h5>
          <h6 class="w3-text-amber"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-amber"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-amber"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div> -->
      </div>
      </div>     
      
      <br>
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->
<!-- <footer class="w3-container w3-amber w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <p class="w3-small">This website was made with W3schools Spaces. Make your own free website today!</p>
 <a class="w3-button w3-round-xxlarge w3-small w3-light-grey w3-margin-bottom" href="https://www.w3schools.com/spaces" target="_blank">Start now</a>
 </footer> -->

</body>
</html>   
@endsection