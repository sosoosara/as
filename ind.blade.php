@extends('master')
@section('content')
<form>
<table class="table">
<tr>
<th>id</th>
<th>first name</th>
<th>last name</th>

</tr>
<tr>
@foreach($team as $member)
<td>{{$member->id}}</td>
<td>{{$member->firstname}}</td>
<td>{{$member->lastname}}</td>

</tr>
@endforeach
</table>
<form>
@stop
