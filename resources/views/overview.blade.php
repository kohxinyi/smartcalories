@extends('master')

@push('script')
<script type="text/javascript" src="{{asset('/DataTables/datatables.min.js')}}"></script>
<script>
    $(function () {
      $("myTable").DataTable();
    });
</script>
@endpush

@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('/DataTables/datatables.min.css')}}"/>
@endpush


@section('content')
<div class="container">
    <h1 class="display-4 font-weight-bold mb-5">Welcome to Smart Calorie!</h1>
    <h2>Overview</h2>

    <p>To use this website for your calorie journal, this is what you should do:</p>

    <ol>
         
    </ol>
</div>

<div class="container-fluid">
    <div class="row">
    <h2 class="mt-5 mb-5">Check our guide table for Food and Calories below</h2>
    </div>
</div>


<h3 align="center" class="mt-3 mb-2"><strong>Type of Food and Calories</strong></h3>
   
   <div class="container mt-3" style="overflow-x:auto;">
   <table id="myTable"  class=" table table-bordered table-striped">
      
      <tbody>
         <tr>
            <td>
            <h4><strong>Food (Vegetable)</strong></h4>
            </td>
            <td>
            <h4><strong>Serving</strong></h4>
            </td>
            <td>
            <h4><strong>Calories</strong></h4>
            </td>
         </tr>
         <tr>
            <td>
            <p>Asparagus</p>
            </td>
            <td>
            <p>1 spear (12 g)</p>
            </td>
            <td>
            <p>2</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Broccoli</p>
            </td>
            <td>
            <p>1 bunch (608 g)</p>
            </td>
            <td>
            <p>207</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Cabbage</p>
            </td>
            <td>
            <p>1 head (908 g)</p>
            </td>
            <td>
            <p>227</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Capsicum</p>
            </td>
            <td>
            <p>1 pepper (45 g)</p>
            </td>
            <td>
            <p>12</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Carrot</p>
            </td>
            <td>
            <p>1 carrot (61 g)</p>
            </td>
            <td>
            <p>25</p>
            </td>
           </tr>
         <tr>
            <td>
            <p>Cauliflower</p>
            </td>
            <td>
            <p>1 floweret (13 g)</p>
            </td>
            <td>
            <p>3</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Cherry Tomato</p>
            </td>
            <td>
            <p>1 cherry tomato (20 g)</p>
            </td>
            <td>
            <p>20</p>
            </td>
            </tr>
         <tr>
            <td>
            <p>Corn</p>
            </td>
            <td>
            <p>1 cup (154 g)</p>
            </td>
            <td>
            <p>562 </p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Potato</p>
            </td>
            <td>
            <p>1 potato (213 g)</p>
            </td>
            <td>
            <p>164</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Spinach</p>
            </td>
            <td>
            <p>1 bunch (340 g)</p>
            </td>
            <td>
            <p>78</p>
            </td>
        </tr>
        
      {{-- </tbody>
   </table>
   
   <p> </p>
   
   <table class="special-case-border" cellspacing="0" cellpadding="0" border="0">
      <tbody> --}}
      <tr>
            <td>
            <h4><strong>Food (Fruits)</strong></h4>
            </td>
            <td>
            <h4><strong>Serving</strong></h4>
            </td>
            <td>
            <h4><strong>Calories</strong></h4>
            </td>
         </tr>
         <tr>
            <td>
            <p>Apple</p>
            </td>
            <td>
            <p>1 apple (182 g)</p>
            </td>
            <td>
            <p>95</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Banana</p>
            </td>
            <td>
            <p>1 banana (125 g)</p>
            </td>
            <td>
            <p>111</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Avocado</p>
            </td>
            <td>
            <p>1 avocado (200 g)</p>
            </td>
            <td>
            <p>320 </p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Cherries</p>
            </td>
            <td>
            <p>1 cherry (8 g)</p>
            </td>
            <td>
            <p>4</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Dates</p>
            </td>
            <td>
            <p>1 date (7.1 g)</p>
            </td>
            <td>
            <p>20</p>
            </td>
           </tr>
         <tr>
            <td>
            <p>Grapes</p>
            </td>
            <td>
            <p>1 cup (151 g)</p>
            </td>
            <td>
            <p>104</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Jackfruit</p>
            </td>
            <td>
            <p>1 cup (151 g)</p>
            </td>
            <td>
            <p>143</p>
            </td>
            </tr>
         <tr>
            <td>
            <p>Mandarin Oranges</p>
            </td>
            <td>
            <p>1 mandarin orange (88 g)</p>
            </td>
            <td>
            <p>47 </p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Mango</p>
            </td>
            <td>
            <p>1 mango (336 g)</p>
            </td>
            <td>
            <p>202</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Papaya</p>
            </td>
            <td>
            <p>1 fruit (500 g)</p>
            </td>
            <td>
            <p>215</p>
            </td>
        </tr>
        <tr>
            <td>
            <h4><strong>Food (Oil)</strong></h4>
            </td>
            <td>
            <h4><strong>Serving</strong></h4>
            </td>
            <td>
            <h4><strong>Calories</strong></h4>
            </td>
         </tr>
         <tr>
            <td>
            <p>Canola Oil</p>
            </td>
            <td>
            <p>1 tbsp (14 ml)</p>
            </td>
            <td>
            <p>124</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Coconut Oil</p>
            </td>
            <td>
            <p>1 tbsp (14 ml)</p>
            </td>
            <td>
            <p>120</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Corn Oil</p>
            </td>
            <td>
            <p>1 tbsp (15 ml)</p>
            </td>
            <td>
            <p>120 </p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Olive Oil</p>
            </td>
            <td>
            <p>1 tbsp (15 ml)</p>
            </td>
            <td>
            <p>120</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Palm Kernel Oil</p>
            </td>
            <td>
            <p>1 tbsp (14 ml)</p>
            </td>
            <td>
            <p>123</p>
            </td>
           </tr>
         <tr>
            <td>
            <p>Palm Oil</p>
            </td>
            <td>
            <p>1 tbsp (14 ml)</p>
            </td>
            <td>
            <p>123</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Hazelnut Oil</p>
            </td>
            <td>
            <p>1 tbsp (14 ml)</p>
            </td>
            <td>
            <p>124</p>
            </td>
            </tr>
         <tr>
            <td>
            <p>Sesame Oil</p>
            </td>
            <td>
            <p>1 tbsp (14 ml)</p>
            </td>
            <td>
            <p>124</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Vegetable Oil</p>
            </td>
            <td>
            <p>1 tbsp (15 ml)</p>
            </td>
            <td>
            <p>120</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Argan Oil</p>
            </td>
            <td>
            <p>1 tbsp (14 ml)</p>
            </td>
            <td>
            <p>125</p>
            </td>
        </tr>
        <tr>
            <td>
            <h4><strong>Food (Soup)</strong></h4>
            </td>
            <td>
            <h4><strong>Serving</strong></h4>
            </td>
            <td>
            <h4><strong>Calories</strong></h4>
            </td>
         </tr>
         <tr>
            <td>
            <p>Beef Noodle Soup</p>
            </td>
            <td>
            <p>1 cup (244 g)</p>
            </td>
            <td>
            <p>83</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Thai Soup</p>
            </td>
            <td>
            <p>1 cup (245 g)</p>
            </td>
            <td>
            <p>147</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Chicken Broth</p>
            </td>
            <td>
            <p>1 cup (244 g)</p>
            </td>
            <td>
            <p>39</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Cream of Chicken Soup</p>
            </td>
            <td>
            <p>1 cup (244 g)</p>
            </td>
            <td>
            <p>117</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Cream of Mushroom Soup</p>
            </td>
            <td>
            <p>1 cup (248 g)</p>
            </td>
            <td>
            <p>97</p>
            </td>
           </tr>
         <tr>
            <td>
            <p>Cabbage Soup</p>
            </td>
            <td>
            <p>1 cup (245 g)</p>
            </td>
            <td>
            <p>69</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Bean Stew</p>
            </td>
            <td>
            <p>1 cup (252 g)</p>
            </td>
            <td>
            <p>335</p>
            </td>
            </tr>
         <tr>
            <td>
            <p>Cream of Potato Soup</p>
            </td>
            <td>
            <p>1 cup (244 g)</p>
            </td>
            <td>
            <p>73</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Chicken Vegetable Soup</p>
            </td>
            <td>
            <p>1 cup (248 g)</p>
            </td>
            <td>
            <p>77</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Instant Ramen</p>
            </td>
            <td>
            <p>1 package (85 g)</p>
            </td>
            <td>
            <p>371</p>
            </td>
        </tr>
        <tr>
            <td>
            <h4><strong>Food (Ice Cream)</strong></h4>
            </td>
            <td>
            <h4><strong>Serving</strong></h4>
            </td>
            <td>
            <h4><strong>Calories</strong></h4>
            </td>
         </tr>
         <tr>
            <td>
            <p>Chocolate Chip Ice Cream</p>
            </td>
            <td>
            <p>1 scoop (72 g)</p>
            </td>
            <td>
            <p>155</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Dairy Milk McFlurry</p>
            </td>
            <td>
            <p>1 mcflurry (183 g)</p>
            </td>
            <td>
            <p>340</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>French Vanilla Ice Cream</p>
            </td>
            <td>
            <p>1 scoop (72 g)</p>
            </td>
            <td>
            <p>145</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Magnum Almond</p>
            </td>
            <td>
            <p>1 magnum (86 g)</p>
            </td>
            <td>
            <p>271</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Magnum Double Chocolate</p>
            </td>
            <td>
            <p>1 magnum (86 g)</p>
            </td>
            <td>
            <p>327</p>
            </td>
           </tr>
         <tr>
            <td>
            <p>McFlurry Oreo</p>
            </td>
            <td>
            <p>1 mcflurry (183 g)</p>
            </td>
            <td>
            <p>340</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Solero</p>
            </td>
            <td>
            <p>1 solero (75 g)</p>
            </td>
            <td>
            <p>75 </p>
            </td>
            </tr>
         <tr>
            <td>
            <p>Strawberry Sundae</p>
            </td>
            <td>
            <p>1 sundae (178 g)</p>
            </td>
            <td>
            <p>281</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Snickers Ice Cream</p>
            </td>
            <td>
            <p>1 bar (50 g)</p>
            </td>
            <td>
            <p>180</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Magnum Gold</p>
            </td>
            <td>
            <p>1 magnum (85 g)</p>
            </td>
            <td>
            <p>290</p>
            </td>
        </tr>
      </tbody>
   </table>
</div>
@endsection