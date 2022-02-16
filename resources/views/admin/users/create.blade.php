@extends('layouts.admin')
@section('admintitle','Users Control')
@section('section')


<div>
@if ($errors->any())
<div class="alert alert-danger">

<ul>

@foreach ($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
</ul>

</div>
@endif
<form method="post" class="formm" enctype="multipart/form-data" action="{{route('users.store')}}">
    <div class="center">
        <i class="far fa-user"></i>
    
        <h3 class="formm1h3">Add User</h3>
        </div>
    @csrf
<label>name</label>

<input class="form-control" name="name" type="text" >


<label>email</label>

<input class="form-control" name="email"  type="email">
<label>passwoord</label>

<input class="form-control" name="password" type="password" >

<label>avatar</label>

<input class="form-control" name="avatar" type="file" >



<!--<input name="image"  type="text">-->

<label>role</label>

<select name="role" class="form-control">
    <option readonly> --role--</option>

<option value="admin"> admin</option>
<option  value="moderator"> moderator</option>

<option value="user"> user</option>



</select>
<input type="submit" name="save-user" class="submituser" value="Save User">

<!--<label>status</label>
<input type="radio" name="status" value="0">pending
<input type="radio" name="status" value="1">approved
-->
</form>






</div>





@endsection