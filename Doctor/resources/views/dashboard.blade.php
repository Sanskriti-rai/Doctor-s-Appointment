@extends('layout.view')
@section('title', 'Appointment')

@section('content')

<style>
	table,th,td{
		border: 2px solid black;
	}
	th{
		background-color: #D6EEEE;
	}
	tr:nth-child(even) {
	  background-color: #D6EEEE;
	}
	.app{
		align-content: center;
		justify-content: center;
	}
</style>
<br>
<div class="app">
	<h3 style=" font-family: cursive; text-align: center; font-size: 2.5rem; padding-top: 14px;">Appointments</h3><br>
	<table style="width: 100%;">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Timming</th>
		</thead>
		<tbody>
		@foreach($appointment as $appointment)
			<tr>
				<td>{{$appointment->name}}</td>
				<td>{{$appointment->email}}</td>
				<td>{{$appointment->timing}}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>

@endsection