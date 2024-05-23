@extends('layout')

@section('content')
<style>
    .card {
        width: 30%; /* Adjust the width as per your preference */
        margin: 10px; /* Add some margin between cards */
        transition: transform 0.3s ease; /* Add smooth transition */
    }

    .card:hover {
        transform: scale(1.05); /* Scale up the card on hover */
    }
</style>

<div class="cards-containers">
    <div class="card">
        <img src="https://veganuary.com/wp-content/uploads/2018/10/beer-3711733_1920.jpg" alt="Food Image 1" class="food-image">
        <div class="drink-name">Beer</div>
    </div>
    <div class="card">
        <img src="https://www.liquor.com/thmb/4B94pSu3bk8V106L1CzHC5sQvw0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-843630694-13ab0d8e3f1f4b38b2271ee22be6d137.jpg" alt="Food Image 2" class="food-image">
        <div class="drink-name">Wine</div>
    </div>
    <div class="card">
        <img src="https://craftybartending.com/wp-content/uploads/2017/03/Liqueurs-1024x678.jpg" alt="Food Image 3" class="food-image">
        <div class="drink-name">Liqueurs</div>
    </div>
    <div class="card">
        <img src="https://sonomawinegarden.com/wp-content/uploads/2022/09/Fortified-Wine-101.jpg" alt="Food Image 4" class="food-image">
        <div class="drink-name">Fortified wines</div>
    </div>
    <div class="card">
        <img src="https://d36tnp772eyphs.cloudfront.net/blogs/1/2019/03/Japanese-sake.jpg" alt="Food Image 5" class="food-image">
        <div class="drink-name">Sake</div>
    </div>
    <div class="card">
        <img src="https://unicorndistillery.com/wp-content/uploads/2022/02/11.png" alt="Food Image 6" class="food-image">
        <div class="drink-name">Tequila</div>
    </div>
</div>
<div class="button">
    <a href="/back">Back</a>
</div>
@endsection
