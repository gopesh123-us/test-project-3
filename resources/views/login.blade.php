    @extends('layouts.master')
    @section('content')
        <main class="container">
            <h1 class="mt-5 text-danger text-center">Login page</h1>
            <div class="row justify-content-center">
                <div class="col-md-4 mt-3">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('login.submit') }}" method="POST">
                                @csrf
                                <div class="mb-2">
                                    <label for="" class="form-label">User Name</label>
                                    <input name="name" type="text" class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">User Email</label>
                                    <input name="email" type="email" class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
