@extends('master')
@section('content')
<form>
<table class="table">
<tr>
<th>id</th>
<th>first name</th>
<th>last name</th>
<th>password</th>
</tr>
<tr>
@foreach($team as $member)
<td>{{$member->id}}</td>
<td>{{$member->firstname}}</td>
<td>{{$member->lastname}}</td>
<td>{{$member->password}}</td>
</tr>
@endforeach
</table>
<form>
@stop
