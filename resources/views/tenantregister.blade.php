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
    </style>
</head>
<body>
    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 ">
                    <div class="ripe-malinka-gradient form-white div-center">
                            <h4 class="text-white">Tenant Register Form</h4>
                            <hr />
                            <form method="post">
                                @csrf
        
                                <div class="row mb-3 d-flex justify-content-center">
                                    <label for="name" class="col-md-3 col-form-label">Name</label>
        
                                    <div class="col-md-9">
                                        <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                                    </div>
                                </div>
        
                                <div class="row mb-3 d-flex justify-content-center">
                                    <label for="email" class="col-md-3 col-form-label">Email Address</label>
        
                                    <div class="col-md-9">
                                        <input id="email" type="email" class="form-control" name="email"  required autocomplete="email">
                                    </div>
                                </div>
        
                                <div class="row mb-3 d-flex justify-content-center">
                                    <label for="password" class="col-md-3 col-form-label">Password</label>
        
                                    <div class="col-md-9">
                                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="col-md-4 offset-md-4">
                                    <button type="submit" id="tenantRegister" class="btn bg-secondary text-white">
                                        Register
                                    </button>
                                </div>
                                <hr>
                                <div class="d-flex">
                                    <span class="d-flex justify-content-start me-4">Already a tanant member?</span>
                                    <button type="button" class="d-flex justify-content-end btn text-gray hm-gradient">Login </button>
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
        jQuery('#tenantRegister').click(function(e){
               e.preventDefault();
               jQuery.ajax({
                    url: "{{route('tenant.register')}}",
                    method: 'post',
                    data: {
                        name: jQuery('#name').val(),
                        email: jQuery('#email').val(),
                        password: jQuery('#password').val(),
                        _token : "{{ csrf_token() }}"
                    },
                    success: function(result) {
                        console.log(result);
                        alert("Successfully Register");
                        window.location.href = "/login";
                    },
                    error: function(error) {
                        alert("Something is wrong");
                    }
                });
            });
    });
    
 </script>