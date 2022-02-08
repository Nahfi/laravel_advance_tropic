<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
</head>
<body>
	
	

	<div class="wrap shadow mb-5">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
				<form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" type="text" name="name">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" type="email" name="email">
					</div>
					<div class="form-group">
						<label for="">file</label>
						<input type="file" name="photo">
					</div>
					
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	



    @php
        

        $all=App\Models\Student::latest()->get()
    @endphp

<div class="container mt-5">
    <div class="row mb-5">
        @foreach ($all as $a)
        <div class="col-lg-6 mb-5">
            @php
             $mediaItems = $a->getMedia()

            @endphp
  }}
            <div class="card" style="width: 18rem;">
 
                
               
                <img height="40px" class="card-img-top" src="{{$mediaItems[0]->getUrl(); }}" alt="Card image cap">
                
               
                <div class="card-body">
                  <h5 class="card-title">{{ $a->name }}</h5>
                  <p class="card-text">{{ $a->email }}</p>
                </div>
  
              </div>
        </div>
            
        @endforeach
   

    </div>
</div>




	<!-- JS FILES  -->
	<script src="{{ asset('/assets/js/jquery-3.4.1.min.js ') }}"></script>
	<script src="{{ asset('/assets/js/popper.min.js ') }}"></script>
	<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/assets/js/custom.js') }}"></script>
</body>
</html>