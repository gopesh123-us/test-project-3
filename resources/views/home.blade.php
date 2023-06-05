    @extends('layouts.master')
    @section('content')
    <main role="main" class="container">
        <h1 class="mt-5 text-danger">Home</h1>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a, ullam reiciendis
        earum distinctio nihil exercitationem quidem neque odit aliquid quasi esse, repudiandae, adipisci non placeat.
        <div class="row mt-5">
            @foreach ($blogs as $blog )
                @if ($blog['status'] === 1)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h1>{{ $blog['title'] }}</h1>
                            <p>{{ $blog['body'] }}</p>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h1>{{ $blog['title'] }}</h1>
                            <p>{{ $blog['body'] }}</p>
                            <div class="btn-sm btn-warning">Pending</div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </main>
    @endsection

    <!-- example of a closure in php and the
         use of laravel directirve.
    ======================================== -->
    @php
        $record = 'record';
        $greeting = "Hello";
        $sayHello = function ($name) use ($greeting) {
         echo $greeting . ', ' . $name . '!';
        };
        $sayHello('John'); // Output: Hello, John!
    @endphp

    @isset($record)
        <div class="alert alert-success">Success</div>
    @endisset

