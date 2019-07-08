
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lagoon Hospital</title>
	
		<!-- css files -->
		<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all"><!-- slider css -->
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
		<link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
		<link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
		<!-- //css files -->
		
</head>
<body>


<!-- //header -->
<header class="py-3">
	<div class="container">
			<div id="logo">
				<h1> <a href="/"><span class="fa fa-stethoscope" aria-hidden="true"></span> Lagoon Hospital</a></h1>
			</div>
		<!-- nav -->
		<nav class="d-lg-flex">

			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
                <li class=""><a href="/create">New-patient</a></li>
                <li class=""><a href="/appointment">Appointments</a></li>
			</ul>
			<div class="login-icon ml-2">
                    <a href="{{ route('logout') }}" class="user"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
			</div>
		</nav>
		<div class="clear"></div>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->



<!-- contact -->
<section class="mail pt-lg-5 pt-4">
	<div class="container pt-lg-5">
        <h2 class="heading text-center mb-sm-5 mb-4">Manage Patient </h2>
        
        <div class=" text-center">
                @if (session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                @endif
            </div>

		<div class="row agileinfo_mail_grids">
			<div class="col-lg-12 agileinfo_mail_grid_right">
                
                @if(count($rec)>0)
                
                <div class=table-responsive>
                        <table class='table table-bordered table-hover table-striped'>
                            <tr>
                                <th>Patient Name</th>
                                <th>Age</th>
                                <th>Symptoms</th>
                                <th>Prescription</th>
                                <th>Date</th>
                                <!--<th>Edit</th>-->
                                <th>Delete</th>
                            </tr>
    
                            @foreach($rec as $r)
                            <tr>
                                <td>{{$r->fullname}}</td>
                                <td>{{$r->age}}</td>
                                <td>{{$r->sym}}</td>
                                <td>{{$r->pres}}</td>
                                <td>{{$r->created_at->diffforhumans()}}</td>
                         <!--   <td><a href='/edit/{{$r->id}}' class'btn btn-info'><i span class='fa fa-pencil'></i></a></td>
                         -->
                            <td><a href='/delete-p/{{$r->id}}' class'btn btn-danger'><i span class='fa fa-remove'></i></a></td>
                            </tr>
                          @endforeach
                        </table>
                    </div>
                    {{ $rec->links() }}

                @else
<div class='alert alert-info text-center'>
    No record found
</div>
                @endif


			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-4 contact-info">
				
			</div>
		</div>
	</div>
	<div class="map mt-5">
	</div>
</section>
<!-- //contact -->



<!-- copyright -->
<div class="copyright">
	<div class="container py-4">
		<div class=" text-center">
            <p>© 2019 Lagoon Hospital, Victoria island. All Rights Reserved | 
                        Developed by <a href="https://www.henrymoby.tech/"> Mobytech</a> </p>
        </div>
	</div>
</div>
<!-- //copyright -->
		
<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

</body>
</html>