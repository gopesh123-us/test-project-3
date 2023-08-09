    @extends('layouts.master')
    @section('content')
        <main class="container">
            <h1 class="mt-5 text-danger">My Home</h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae molestiae provident veritatis deserunt
            autem, a
            harum atque minima quis itaque sit odio ex magni nobis, architecto molestias debitis consectetur! Beatae.
            <div class="text-danger">
                @foreach ($id as $one)
                    {{ $one }};
                @endforeach
            </div>

        </main>
    @endsection
