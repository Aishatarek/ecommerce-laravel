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
<div class="container">
<div class="row justify-content-between">
<form method="post" class="formm col-md-6 col-sm-12" enctype="multipart/form-data"  action="{{route('products.update', $product->id)}}">
    <div class="center">
                <i class="fas fa-mail-bulk"></i>

                <h3 class="formmh3">edit Product</h3>
                </div>
            @csrf

            <div class="d-flex justify-content-between">
            <div>
            <label>name_en</label>
            <input class="form-control" value="{{$product->name_en}}" name="name_en" type="text" >
            </div>
            <div class="rtll">
            <label>name_ar</label>

            <input class="form-control" value="{{$product->name_ar}}" name="name_ar" type="text" >
            </div>
            </div>
            <div class="d-flex justify-content-between">
                <div>

            <label>description_en</label>

            <input class="form-control" value="{{$product->description_en}}" name="description_en"  type="text">
                </div>
                <div class="rtll">

            <label>description_ar</label>

            <input class="form-control" value="{{$product->description_ar}}" name="description_ar"  type="text">
                </div>

            </div>

            <!--<input name="image"  type="text">-->
            <label>old_price</label>

            <input class="form-control" value="{{$product->old_price}}" name="old_price"  type="number">
            <label>current_price</label>

            <input class="form-control" value="{{$product->current_price}}" name="current_price"  type="number">
            <label>amount</label>

            <input class="form-control" value="{{$product->amount}}" name="amount"  type="number">
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

            <option
            @if ($product->status==0)
            selected


            @endif

            value="0"> hidden</option>
            <option  
            @if ($product->status==1)
                selected
            
            
                @endif

            value="1"> visibale</option>



            </select>
            <input type="submit" class="productsubmit" name="save-user" value="Save Product">


</form>
<div class="col-md-5 col-sm-12 formm2">
    <div class="center">
        <i class="fas fa-mail-bulk"></i>

        <h3 class="formmh3">The Product</h3>
        </div>
    <div class="d-flex justify-content-between">
    <div>
        <p>The Name in English :</p>
        <h3>{{$product->name_en}}</h3>
    </div>
    <div class="rtll">
        <p>الاسم بالعربيه :</p>
        <h3>{{$product->name_ar}}</h3>
    </div>
    </div>
    <div>

    <div>
        <p>The Describtion in English :</p>
        <h3 class="dess">{{$product->description_en}}</h3>
    </div>
    <div class="rtll">
        <p>الوصف بالعربيه :</p>
        <h3 class="dess">{{$product->description_ar}}</h3>
    </div>
    </div>
    <div class="d-flex justify-content-between" >
    <div>
        <p>The Image :</p>
        <img src="{{asset('images/products/' . $product->image)}}" width="100px" height="50px" alt="">
    </div>
    <div class="rtll">
        <p >The Sub Image :</p>
        <img src="{{asset('images/products/' . $product->image)}}" width="100px" height="50px" alt="">
    </div>
    </div>
    <div>
        <p>The Status :</p>
        <h3>
            @if ($product->status==1)
            visable
            @else
            hidden
                
            @endif
         </h3>
    </div>

</div>

</div>
</div>


</div>





@endsection