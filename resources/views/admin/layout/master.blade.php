<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
	<link href="/assets/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="/assets/bootstrap.bundle.min.js"></script>
  <style type="text/css">
    .l-side li:hover{
      background: #ddd;
    }
    .l-m-side::-webkit-scrollbar {
    display: none;
}
  </style>
  @yield('css')
</head>
<body class="bg-light">
@include('admin.layout.nav')

<div class="container-fluid mt-2 pt-5">
  <div class="row mt-3">
    <div class="col-md-3"  >
  
      <div style="height:100vh!important; overflow: auto!important;"  class="offcanvas-sm bg-light l-m-side offcanvas-start" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">
            <img src="/assets/images/logo.png" width="110px">
          </h5>
          
          <i class="fa-solid fa-circle-xmark fs-4" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></i>
        </div>
        <div class="offcanvas-body">
          <ul class="list-group l-side w-100">
            <li class="list-group-item py-3" style="font-size: 18px;">
          <a href="" class="text-dark page-link">
            <i class="fa-solid fa-gauge ms-4 me-2"></i>
            Dashboard
          </a>
      </li>

      <li class="list-group-item py-3" style="font-size: 18px;">
          <a href="" class="text-dark page-link">
            <i class="fa-solid fa-cash-register ms-4 me-2"></i>
            Cash Management
          </a>
      </li>

        <li class="list-group-item py-3" style="font-size: 18px;">
          <a href="" class="text-dark page-link">
            <i class="fa-solid fa-user ms-4 me-2"></i>
            Suppliers Management
          </a>
        </li>

        <li class="list-group-item py-3 logout" style="font-size: 18px;cursor:pointer;">
            <i class="fa-solid fa-power-off ms-4 me-2"></i>
            Logout
        </li>

          </ul>
        </div>
      </div>

    </div>
    <div class="col-md-9 l-m-side" style="height:95vh!important; overflow: auto!important;">
      <div class="alert bg-white shadow-sm">
       @yield('content')
      </div>
    </div>
  </div>
</div>

@yield('script')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
@if(session()->has('success'))
<script>
		Toastify({
			text: "{{session('success')}}",
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  $('.logout').click(function(){
      swal({
  title: "Are you sure to Logout?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   location.href="{{url('admin/logout')}}";
  }
})
});
</script>
</body>
</html>