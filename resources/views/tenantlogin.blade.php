<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tenant Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('../../css/style.css') }}">
    <style>
        .bg-gray{
            background-color: #dfdfdf;
        }
        .div-center{
            height: 300px;
        }
    </style>
</head>
<body id="user_info">
    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-login form-white div-center">
                        <h4 class="">Login Page for Tenant {{tenant('id')}} </h4>
                        <hr>
                        <form method="post" action="login" id="login" >
                            @csrf
    
                            <div class="row mb-3 d-flex justify-content-center">
                                <label for="email" class="col-md-3 col-form-label">Email</label>
    
                                <div class="col-md-9">
                                    <input id="email" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
                                </div>
                            </div>
    
                            <div class="row mb-3 d-flex justify-content-center">
                                <label for="password" class="col-md-3 col-form-label">Password</label>
    
                                <div class="col-md-9">
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" id="tenantLogin" class="btn bg-secondary text-white">
                                    Login Here
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<script>
    jQuery(document).ready(function(){
        jQuery('#tenantLogin').click(function(e){
            e.preventDefault();
            jQuery.ajax({
                url: "{{route('tenant.login')}}",
                method: 'post',
                data:{
                    email: jQuery('#email').val(),
                    password: jQuery('#password').val(),
                    _token : "{{ csrf_token() }}"
                },
                success: function(result) {
                    console.log(result);
                    $('#user_info').html(result.html);
                    // window.location.href = "/login";
                },
                error: function(error) {
                        alert("User doesn't exist");
                    }
            });
        });
    });
</script>