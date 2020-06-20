@extends('auth.layout')

@section('title','Login')

@section('content')
<div class="row h-100">
    <div class="col-12 col-md-10 mx-auto my-auto">
        <div class="card auth-card">
            <div class="position-relative image-side ">
                <p class=" text-white h2">MAGIC IS IN THE DETAILS</p>
                <p class="white mb-0">
                    Please use your credentials to login.
                    <br>If you are not a member, please
                    <a href="{{ route('register') }}" class="white">register</a>.
                </p>
            </div>
            <div class="form-side">
                <a href="#">
                    <span class="logo-single"></span>
                </a>
                <h6 class="mb-4">Login</h6>

                <form method="POST" onsubmit="login(event)">
                    <label class="form-group has-float-label mb-4">
                        <input class="form-control iferror-user_name" id="user_name" />
                        <span>E-mail</span>
                        <p class="text-danger ifmessage-user_name"></p>
                    </label>
                    <label class="form-group has-float-label mb-4">
                        <input class="form-control iferror-password" type="password" id="password" placeholder="" />
                        <span>Password</span>
                        <p class="text-danger ifmessage-password"></p>
                    </label>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="/forget_password">Forget password?</a>
                        <button class="btn btn-primary btn-lg btn-shadow" type="submit">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<input type="text" name="" id="api_url" value="{{ env('API_URL') }}">    
@endsection

      