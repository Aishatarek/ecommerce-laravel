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
<form method="post" class="formm" action="{{route('categories.store')}}">
    <div class="center">
        <i class="fas fa-shapes"></i>
    
        <h3 class="formm2h3">Add Category</h3>
        </div>
    @csrf
    <div class="flexyyyy">
        <div>
<label>Title</label>

<input class="form-control" name="title_en" type="text" >
        </div>
<div class="arrrr">
<label>الاسم</label>

<input class="form-control" name="title_ar" type="text" >
</div>
    </div>
    <div class="flexyyyy">
<div>
<label>Description</label>

<textarea class="form-control" name="description_en"  type="text"></textarea>
</div>
<div class="arrrr">
<label>الوصف</label>

<textarea class="form-control" name="description_ar"  type="text"></textarea>
</div>
    </div>

<!--<input class="form-control" name="image"  type="text">-->

<label>status</label>

<select name="status" class="form-control">
    <option readonly> --role--</option>

<option value="0"> hidden</option>
<option value="1"> visibale</option>



</select>
<input  type="submit" class="categorysubmit" name="save-user" value="Save Category">

<!--<label>status</label>
<input class="form-control" type="radio" name="status" value="0">pending
<input class="form-control" type="radio" name="status" value="1">approved
-->
</form>






</div>





@endsection