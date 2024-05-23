@extends('layout')

@section('content')
<div class="title">
<h1>Welcome to our FoodHub!</h1>
</div>
    <div class="main-container">
        <div class="containers">
            <h2><a href="/types" style="text-decoration: none; color:black">Foods</a></h2>
            <img src="https://tse4.mm.bing.net/th?id=OIP.nfmQp4lyU7Un1wTeXGnybQHaEw&pid=Api&P=0&h=180" alt="foods" class="foods">
            <p>Taste our Delicious Foods here at Chef Foods</p>
        </div>
        <div class="container1">
            <h2><a href="/typesdrinks" style="text-decoration: none; color:black">Drinks</a></h2>
            <img src="http://images6.alphacoders.com/304/304536.jpg" alt="drinks" class="drinks">
            <p>Drinks that only in Chef Foods you can taste</p>
        </div>
    </div>
@endsection
