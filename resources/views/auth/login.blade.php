@extends('auth.layouts.main')
@section('content')
    <!-- Section: Design Block -->
    <section class="register">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start vh-100" style="background-color: hsl(0, 0%, 96%)">
            <div class="container align-items-center mt-5">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            The best offer <br />
                            <span class="text-primary">for your business</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                            quibusdam tempora at cupiditate quis eum maiores libero
                            veritatis? Dicta facilis sint aliquid ipsum atque?
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <form method="post" action="">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <h1 class="form-label">Sign In</h1>
                                    </div>

                                    @if ($errors->any())
                                        <div class="alert alert-danger mt-3">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3" class="form-control" name="email" />
                                        <label class="form-label" for="form3Example3">Email address</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4" class="form-control" name="password" />
                                        <label class="form-label" for="form3Example4">Password</label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4">
                                        Sign In
                                    </button>

                                    <p class="form-label">Don't Have an acc? <a href="/register">Register</a></p>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
@endsection
