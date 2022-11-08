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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-secondary bg-gradient text-white text-center fs-4">Tenant Login Form</div>
                        <div class="card-body">
                            <form method="post">
                                @csrf
        
                                <div class="row mb-3 d-flex justify-content-center">
                                    <label for="name" class="col-md-3 col-form-label">Name</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                                    </div>
                                </div>
        
                                <div class="row mb-3 d-flex justify-content-center">
                                    <label for="password" class="col-md-3 col-form-label">Password</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" id="tenantLogin" class="btn bg-secondary w-50 bg-gradient text-white">
                                        Login Here
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