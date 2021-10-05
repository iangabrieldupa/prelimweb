@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sales</h1>
                </div>
            </div>
        </div>
    </section>

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
	border: 1px black solid;
}

table {
	border-collapse: collapse;
}

table {
	border-spacing: 10px 10px;
}

table {
	width: 100%;
}

th {
	height: 30px;
}

th, td {
	padding: 10px;
}

th {
	text-align: left;
}

td {
	text-align: center;
}

td {
height: 40px;
vertical-align: bottom;
}

th, td {
	border-bottom: 1px solid black;
}

tr:hover {
background-color: lightgray;
}

th {
	background-color: gray;
	color: white;
}

tr:nth-child(even) {
	background-color: lightgray;
}

table {
	empty-cells: hide;
	border-collapse: separate;
}
</style>
</head>
<body>

<h2 style="text-align:center">Sales</h2>

<table>
  <tr>
    <th>Product</th>
    <th>Author</th>
    <th>Sales</th>
  </tr>
  <tr>
    <td>One Piece</td>
    <td>Eiichiro Oda</td>
    <td>100,590</td>
  </tr>
  <tr>
    <td>Naruto Shippuden</td>
    <td>Masashi Kishimoto</td>
    <td>78,989</td>
  </tr>
  <tr>
    <td>Hunter X Hunter</td>
    <td>Yoshihiro Togashi</td>
    <td>79,120</td>
  </tr>
</table>

@endsection

