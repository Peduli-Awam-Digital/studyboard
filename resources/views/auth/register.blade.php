@extends('auth.layout')
@section('title','Register')
@section('content')
<div class="row h-100">
    <div class="col-12 col-md-10 mx-auto my-auto">
        <div class="card auth-card">
            <div class="position-relative image-side ">
                <p class=" text-white h2">MAGIC IS IN THE DETAILS</p>
                <p class="white mb-0">
                    Please use this form to register.
                    <br>If you are a member, please
                    <a href="/login" class="white">login</a>.
                </p>
            </div>
            <div class="form-side" style="position: relative;">
                <a href="Dashboard.Default.html">
                    <span class="logo-single"></span>
                </a>
                <h6 class="mb-4">Register</h6>

                <form onsubmit="register(event)">
                    <label class="form-group has-float-label mb-4">
                        <input class="form-control iferror-name" id="name" />
                        <span>Your Name</span>
                        <p class="text-danger ifmessage-name"></p>
                    </label>
                    <label class="form-group has-float-label mb-4">
                        <input class="form-control iferror-company_name" id="company_name" />
                        <span>Company Name</span>
                        <p class="text-danger ifmessage-company_name"></p>
                    </label>
                    <label class="form-group has-float-label mb-4">
                        <input class="form-control iferror-email" id="email" />
                        <span>Your Email</span>
                        <p class="text-danger ifmessage-email"></p>
                    </label>
                    <label class="form-group has-float-label mb-4">
                        <input class="form-control iferror-password" type="password" id="password" />
                        <span>Password</span>
                        <p class="text-danger ifmessage-password"></p>
                    </label>
                    <label class="form-group has-float-label mb-4">
                        <input class="form-control" type="password" id="confirm_password" />
                        <span>Confirm Password</span>
                    </label>
                    <label class="form-group has-float-label mb-4">
                        <select class="form-control custom-select iferror-employee_count" id="employee_count">
                            <option>1-10</option>
                            <option>11-50</option>
                            <option>51-100</option>
                        </select>
                        <span>Employee</span>
                        <p class="text-danger ifmessage-employee_count"></p>
                    </label>
                    <div class="d-flex justify-content-end align-items-center">
                        <button class="btn btn-primary btn-lg btn-shadow" type="submit">REGISTER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>    
<input type="text" name="" id="api_url" value="{{ env('API_URL') }}">

<script type="text/javascript">

    const apiUrl = $('#api_url').val();

    async function register(e){
        try{
            e.preventDefault()
            showLoader('.form-side')

            if ($('#password').val() !== $('#confirm_password').val()) {
                customToast('Password - Confirm Password not match', 'danger');
                return
            }

            await ajaxRequest(apiUrl + '/auth/register', 'POST', {
                name: $('#name').val(),
                company_name: $('#company_name').val(),
                email: $('#email').val(),
                password: $('#password').val(),
                employee_count: $('#employee_count').val()
            });

            document.location = '/login';
        }catch(err){
            errorAJAX(err);
        }finally{
            removeLoader('.form-side')
        }
    }

</script>


@endsection

