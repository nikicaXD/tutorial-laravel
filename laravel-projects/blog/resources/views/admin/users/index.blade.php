<h1>Podatki o uporabnikih</h1>
<br />

<table border="1">
	<tr>
	<td>Id</td>
	<td>ime</td>
	<td>email</td>
	<td>vloga</td>
	<td>ustvarjen</td>
</tr>
@if($users)

@foreach ($user as $user)
<tr>
	<td>{{$user->id}}</td>
	<td>{{$user->name}}</td>
	<td>{{$user->email}}</td>
	<td>{{$user->role->name}}</td>
	<td>{{$user->create_at->diffForHumans()}}</td>
	</tr>
@endforeach
@endif
</table>