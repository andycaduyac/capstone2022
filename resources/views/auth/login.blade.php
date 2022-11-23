@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center mt-5">

            <div class="col col-md-4" id="logForm">
                @if (session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                <form action="{{'/admin/login'}}" method="post">
                    {{ csrf_field() }}
                     <h2 class="d-flex justify-content-center m-2">Jyra's Resort</h2>
                     <p class="text-muted d-flex justify-content-center m-2"> Admin Login </p>

                     <hr>
                    <div class="form-floating mb-3 mt-4">
                        <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                        <label for="floatingInput" class="text-secondary"><i class="mdi mdi-email "></i>Username </label>
                        @error('username'){{$message}}@enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingInput" name="password" placeholder="Password">
                        <label for="floatingInput" class="text-secondary"><i class="mdi mdi-key"></i> Password </label>
                        @error('password'){{$message}}@enderror
                    </div>
                    <button class="btn btn-primary d-flex mx-auto px-5 mb-4 mt-4" id="loginBtn" type="submit">LOGIN</button>
                    {{-- <a href="/admin-register" class="d-flex">Don't have an account yet?</a> --}}
                </form>
            </div>
        </div>
    </div>


<style>
    #loginBtn{
        background: #57b846;
        border: none;
        text-align: center;
        transition: 0.4s;
    }
    #loginBtn:hover{
        background: #2b771e;
    }
    #logForm{
        margin-top: 20vh;
    }
    #floatingInput{
        background: #e6e6e6;
    }
    hr{
        margin: 1.5rem;
        height: 2px;
    }
</style>

@endsection






