@extends('master')
@section('content')
<script language="JavaScript">
<!--
function calculateBmi() {
var weight = document.bmiForm.weight.value
var height = document.bmiForm.height.value
if(weight > 0 && height > 0){	
var finalBmi = weight/(height/100*height/100)
document.bmiForm.bmi.value = finalBmi
if(finalBmi < 18.5){
document.bmiForm.meaning.value = "That you are too thin."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.meaning.value = "That you are healthy."
}
if(finalBmi > 25){
document.bmiForm.meaning.value = "That you have overweight."
}
}
else{
alert("Please Fill in everything correctly")
}
}
//-->
</script>
<body>
<form name="bmiForm">
<h3>BMI Calculator</h3>
<br/>   
<input type="text" name="weight" placeholder="Enter Weight (kg)" size="20"><br /><br/>
<input type="text" name="height" placeholder="Enter Height (Meters)" size="20"><br /><br/>

<input class="decoration-one px-3 py-2" type="button" value="Calculate BMI" onClick="calculateBmi()"><br /><br/>

<input type="text" name="bmi" placeholder="Your BMI Will be here" size="20"><br /><br/>
<input type="text" name="meaning" size="35"><br /><br/>
<input class="decoration-one px-3 py-2" type="reset" value="Reset" />
<br/>
</form>
</body>

<style>
     *   {
    box-sizing: border-box;
}
.decoration-one {
    background-color:rgb(249, 154, 154);
    margin: 0;
    border:0;
    border-radius: 12px;
    padding: 9px;
    font-weight: bold;
}
.decoration-one:hover {
    background-color:yellow;

}
a {
    text-decoration: none;
    color:black;
}
</style>  



@endsection