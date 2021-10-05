@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pricings</h1>
                </div>
            </div>
        </div>
    </section>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #FF0000;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>
</head>
<body>

<h2 style="text-align:center">Choose the plan that’s right for you</h2>
<p style="text-align:center">Watch all you want. Ad-free.</p>
<p style="text-align:center">Recommendations just for you.</p>
<p style="text-align:center">Change or cancel your plan anytime.</p>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color: #FF0000">Mobile</li>
    <li class="grey">₱149 / year</li>
    <li>Video Quality: Good</li>
    <li>Resolution: 480p</li>
    <li>Screens: 1</li>
    <li>Device you can use to watch: Phone, Tablet</li>
    <li class="grey"><a href="#" class="button">Subscribe</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color: #FF0000">Standard</li>
    <li class="grey">₱459 / year</li>
    <li>Video Quality: Good</li>
    <li>Resolution: 1080p</li>
    <li>Screens: 2</li>
    <li>Device you can use to watch: Phone, Tablet, Computer, TV</li>
    <li class="grey"><a href="#" class="button">Subscribe</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color: #FF0000">Premium</li>
    <li class="grey">₱549 / year</li>
    <li>Video Quality: Best</li>
    <li>Resolution: 4K + HDR</li>
    <li>Screens: 4</li>
    <li>Device you can use to watch: Phone, Tablet, Computer, TV</li>
    <li class="grey"><a href="#" class="button">Subscribe</a></li>
  </ul>
</div>
</body>
</html>

@endsection

