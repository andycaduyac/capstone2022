@extends('base')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col col-md-4" id="regForm">
            <form action="{{'/register'}}" method="POST">
                {{ csrf_field() }}
                <h2 class="d-flex justify-content-center m-2">Sign up</h2>
                <hr>

                <div class="form-floating mb-3 mt-4 mx-2">
                    <input type="text" for="name" class="form-control" name="username" placeholder="Username">
                    <label for="name" class="text-secondary"><i class="bi bi-person"></i> Username </label>
                </div>

                <div class="form-floating mb-3 mx-2">
                    <input type="password" for="password" class="form-control" name="password" placeholder="Password">
                    <label for="password" class="text-secondary"><i class="bi bi-key"></i> Password</label>
                </div>

                <button class="btn btn-primary d-flex mx-auto px-5 mb-4 mt-4" id=" regBtn" type="submit">REGISTER</button>
                <a href="/login" class="d-flex">Already have an account?</a>
            </form>
        </div>
    </div>
</div>

@endsection
