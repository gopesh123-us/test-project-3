@extends('layouts.master')
@section('content')
<main class="container">
    <h1 class="mt-5 text-danger">Contact Page</h1>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim praesentium reprehenderit ea esse eaque. Ratione,
    sed consequuntur soluta aliquid voluptatum voluptas, recusandae at tenetur itaque, assumenda natus illo illum
    facere.
    @php
        echo '<br>'.'Contact '. $name;
    @endphp
</main>
@endsection
