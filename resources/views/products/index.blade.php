@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
            </div>
        </div>
    </section>

<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: auto;
  text-align: center;
  font-family: arial;
  float: left;
  padding: 12px;
  width: 33.3%;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Anime</h2>

<div class="card">
  <img src="/img/op.png" alt="One Piece" style="width:100%">
  <h1>One Piece</h1>
  <p class="price">₱2,999.99</p>
  <p>One Piece is a Japanese manga series written and illustrated by Eiichiro Oda.</p>
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="/img/n.jpg" alt="Naruto Shippuden" style="width:100%">
  <h1>Naruto Shippuden</h1>
  <p class="price">₱2,999.99</p>
  <p>Naruto Shippuden is a Japanese manga series written and illustrated by Masashi Kishimoto.</p>
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="/img/hxh.jpg" alt="Hunter X Hunter" style="width:100%">
  <h1>Hunter X Hunter</h1>
  <p class="price">₱2,999.99</p>
  <p>Hunter X Hunter is a Japanese manga series written and illustrated by Yoshihiro Togashi. It has been serialized in Shueisha's Weekly Shōnen Jump since March 1998,</p>
  <p><button>Add to Cart</button></p>
</div>

</body>
</html>

@endsection

