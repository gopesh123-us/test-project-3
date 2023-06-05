@extends('layouts.master')
@section('content')
    <main role="main" class="container">
        <h1 class="mt-5 text-danger">Controller Practice</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa repudiandae,
            labore provident harum minima omnis error eligendi perferendis assumenda
            cumque aliquam odit a reprehenderit dignissimos nemo, inventore quidem, fuga sit.
        </p>
        <div class="row mb-5">
            @foreach ($cards as $card )
            @if($card['status'] === 1)
            <div class="col-md-4     mb-3">
                <div class="card">
                    <div class="card-body">
                        <h1>{{ $card['title'] }}</h1>
                        <p>{{ $card['body'] }}</p>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h1>{{ $card['title'] }}</h1>
                        <p>{{ $card['body'] }}</p>
                        <div class="btn-sm btn-warning">Pending</div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </main>
@endsection
