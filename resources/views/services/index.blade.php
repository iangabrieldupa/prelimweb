@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Services</h1>
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
  background-color: #000000;
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

<h2 style="text-align:center">Services Offered</h2>

<div class="columns">
  <ul class="price">
    <li class="header">Stream</li>
    <li class="grey">Services</li>
    <li>Up to 1080p</li>
    <li>Watch anytime</li>
    <li class="grey"><a href="#" class="button">Watch Now</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Upload</li>
    <li class="grey">Services</li>
    <li>50GB Storage</li>
    <li>Unli upload</li>
    <li class="grey"><a href="#" class="button">Upload Now</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Download</li>
    <li class="grey">Services</li>
    <li>50GB Storage</li>
    <li>Unli download</li>
    <li class="grey"><a href="#" class="button">Download Now</a></li>
  </ul>
</div>
</body>
</html>
@endsection

