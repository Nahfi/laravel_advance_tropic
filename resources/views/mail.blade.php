<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
    <title>Document</title>
</head>
<body>
    




    <div class="p mx-auto mt-5">
        <div class="container x mx-auto mt-5">

     

            <div class="row  mx-auto mt-5">
                <div class="col-lg-6 mx-auto mt-5">
                    <form action="{{ route('api_mail') }}" method="post" enctype="multipart/form-data">
                        @csrf
    
                        <input  type="email" name="email" class="form-control mb-2">
                        <input type="submit" name="submit" id="" >
    
    
                    </form>
                </div>
            </div>
            
        
        </div>
    </div>
 






    <script src="{{ asset('/assets/js/jquery-3.4.1.min.js ') }}"></script>
	<script src="{{ asset('/assets/js/popper.min.js ') }}"></script>
	<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/assets/js/custom.js') }}"></script>
</body>
</html>