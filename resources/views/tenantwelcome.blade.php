<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tenant Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                <h3>Welcome for   {{$name}} <span class="name"></span> of <span class="tenant-id">{{tenant('id')}}</span>" of Tenant </h3><br>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-secondary bg-gradient text-white text-center fs-4">Tenant Login Form</div>
                        <div class="card-body">
                            <form method="post" >
                                @csrf
        
                                <div class="row mb-3 d-flex justify-content-center">
                                    <label for="name" class="col-md-3 col-form-label">Name</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" required value="{{$name}}">
                                    </div>
                                </div>
                                
                                <div class="row mb-3 d-flex justify-content-center">
                                    <label for="email" class="col-md-3 col-form-label">Email</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control" name="email" required value="{{$email}}">
                                    </div>
                                </div>
                                <div class="row mb-3 d-flex justify-content-center">
                                    <label for="password" class="col-md-3 col-form-label">Password</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required value="{{$password}}">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" id="tenantUpdate" class="btn bg-secondary w-50 bg-gradient text-white">
                                        Edit
                                    </button>
                                </div>
                            </form>
                        </div>
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
        jQuery('#tenantUpdate').click(function(e){
            e.preventDefault();
            var formData = new FormData(); 
            formData.append('name', jQuery('#name').val());
            formData.append('email',  jQuery('#email').val());
            jQuery.ajax({
                url:"{{route('tenant.update')}}",
                type:"post",
                data:{

                    _token : "{{ csrf_token() }}"
                },
            });
        });
    });
</script>