<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
	<link href="{{asset('assets/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="{{asset('assets/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
	<div class="container pt-5">
		<div class="row">
				<h2 class="text-center mb-5"><img src="{{asset('assets/images/logo.png')}}" width="200px"></h2>
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="alert alert-light py-5 border shadow-sm">
				<h3 class="text-center mb-4">Admin Login Form</h3>
				@if($errors->any())
					@foreach($errors->all() as $error)
					<span class="badge bg-danger mb-1">{{$error}}</span><br>
					@endforeach
				@endif

				<form method="post" action="{{url('admin/login')}}">
                    @csrf
					<input type="" placeholder="Enter Email" class="form-control mb-2" name="email">
					<input type="" placeholder="Enter Password" class="form-control mb-2" name="password">
					<button class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i> Login</button>
				</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
	@if(session()->has('error'))
<script>
	Toastify({
		text: "{{session('error')}}",
		duration: 3000,
      position: "center",
      style: {
    background:"#fff",
    border:"1px solid #ddd",
    borderRadius:"10px",
    padding:"20px",
    color:"#555",
    },
			}).showToast();
	</script>
@endif
</body>
</html>