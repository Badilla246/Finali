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
        <img src="http://images.deliveryhero.io/image/foodpanda/recipes/burger-patty-recipe-1.jpg" alt="Food Image 1" class="food-image">
        <div class="food-name">Burger</div>
    </div>
    <div class="card">
        <img src="https://wallpaperaccess.com/full/3667947.jpg" alt="Food Image 2" class="food-image">
        <div class="food-name">Pizza</div>
    </div>
    <div class="card">
        <img src="https://www.thespruceeats.com/thmb/IzejeJObvz4lvYpW06uwhX6iR00%3D/3680x2456/filters:fill(auto%2C1)/GettyImages-Ridofranz-1053855542-60b89644efd2470fbfb6475b175064df.jpg" alt="Food Image 3" class="food-image">
        <div class="food-name">Sushi</div>
    </div>
    <div class="card">
        <img src="https://fthmb.tqn.com/rzMOnsNJVcu6mYw6WLPNmk1Co8Y=/2700x1800/filters:fill(auto,1)/88829874-589cee923df78c4758769849.jpg" alt="Food Image 4" class="food-image">
        <div class="food-name">Pasta</div>
    </div>
    <div class="card">
        <img src="https://www.samtell.com/hs-fs/hubfs/Blogs/Four-Scrumptous-Tacos-Lined-up-with-ingredients-around-them-1.jpg?width=1800&name=Four-Scrumptous-Tacos-Lined-up-with-ingredients-around-them-1.jpg" alt="Food Image 5" class="food-image">
        <div class="food-name">Tacos</div>
    </div>
    <div class="card">
        <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https:%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F9%2F2021%2F03%2F10%2Fspicy-chicken-curry-FT-RECIPE0321.jpg" alt="Food Image 6" class="food-image">
        <div class="food-name">Curry</div>
    </div>
</div>
<div class="button">
    <a href="/back">Back</a>
</div>
@endsection
