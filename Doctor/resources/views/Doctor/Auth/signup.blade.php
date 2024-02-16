@section('title', 'registration')
@extends('Doctor.layout.Auth.Doctor')

@section('content')

<div class="card">
	<div class="card-header">SignUp<a href="{{route('/')}}" class="btn-close position-absolute top-1 end-0" aria-label="Close" ></a>
	</div>
	<div class="card-body">
		<form method="POST" action="{{route('doctor.registration.save')}}">
		@csrf
		  <div class="mb-3">
		  	<label for="exampleInputEmail1" class="form-label">Full Name</label>
		    <input type="text" class="form-control" name="name">
		  </div>
		  <div>
		    <label for="exampleInputEmail1" class="form-label">Email address</label>
		    <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
		    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		  </div>
		  <br>
		  <div class="mb-3">
		  	<label for="exampleInputEmail1" class="form-label">Specialization</label><br>
		    <select name="spl">
		    	<option>Choose</option>
		    	<optgroup label="Doctor"></optgroup>
			    	<option>Psychiatrist</option>
			    	<option>Dermatologist</option>
			    	<option>Cardiologist</option>
			    	<option>Neurologist</option>
			    	<option>Pediatrician</option>
			    	<option>Surgeon</option>
		    	</optgroup>
		    	<optgroup label="Patient"></optgroup>
			    	<option>Patient</option>
		    	</optgroup>
		    </select>
		  </div>
		  <div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirm">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		   Already Member? <a href="{{route('doctor.login')}}" class="btn btn-primary">Login</a>
		</form>
	</div>
</div>

@endsection