@extends('layouts.admin')
@section('admintitle','products Control')
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
<form method="post" class="formm" enctype="multipart/form-data" action="{{route('products.store')}}">
    <div class="center">
    <i class="fas fa-mail-bulk"></i>

    <h3 class="formmh3">Add Product</h3>
    </div>
   @csrf
<div class="d-flex">

<label>name_en</label>

<input class="form-control" name="name_en" type="text" >

<label>name_ar</label>

<input class="form-control" name="name_ar" type="text" >
</div>
<div class="d-flex">

<label>description_en</label>

<input class="form-control" name="description_en"  type="text">
<label>description_ar</label>

<input class="form-control" name="description_ar"  type="text">

</div>
<!--<input name="image"  type="text">-->
<label>old_price</label>

<input class="form-control" name="old_price"  type="number">
<label>current_price</label>

<input class="form-control" name="current_price"  type="number">
<label>amount</label>

<input class="form-control" name="amount"  type="number">
<!--
<label>category_id</label>

<input class="form-control" name="category_id"  type="number">
-->
<label>image</label>

<input class="form-control" name="image" type="file" >
<label>sub-image</label>

<input class="form-control" name="sub_images" type="file" >

<label>status</label>

<select class="form-control" name="status">
    <option readonly> --status--</option>

<option value="0"> hidden</option>
<option value="1"> visibale</option>



</select>
<input type="submit" class="productsubmit" name="save-user" value="Save Product">

<!--<label>status</label>
<input type="radio" name="status" value="0">pending
<input type="radio" name="status" value="1">approved
-->
</form>






</div>





@endsection