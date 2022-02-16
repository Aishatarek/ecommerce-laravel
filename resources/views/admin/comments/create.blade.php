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
<form method="post" class="formm" action="{{route('comments.store')}}">
    <div class="center">
        <i class="fas fa-comments"></i>
    
        <h3 class="formm3h3">Add Comment</h3>
        </div>
    @csrf
<label>comment</label>

<input class="form-control" name="comment" type="text" >



<!--<input name="image"  type="text">-->

<label>status</label>

<select class="form-control" name="status">
    <option readonly> --role--</option>

<option value="0"> hidden</option>
<option value="1"> visibale</option>



</select>
<label>user_id</label>

<input class="form-control" name="user_id"  type="number">
<label>product_id</label>

<input class="form-control" name="product_id"  type="number">
<input type="submit" class="commentsubmit" name="save-user" value="Save Comment">

<!--<label>status</label>
<input type="radio" name="status" value="0">pending
<input type="radio" name="status" value="1">approved
-->
</form>






</div>





@endsection