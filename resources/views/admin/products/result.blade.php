@extends('layouts.admin')
@section('admintitle','users')
@section('section')
<div>
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/Home-default-1510-3.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>SIMPLY DELICIOUS</h5>
 

          
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/Home-default-1510-4.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>ALWAYS FRESH</h5>
        </div>
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <ul class="list">
    <h3 class="closenav" onclick="navOff()" >&#x2715</h3>

      
    <li>
        <a  href={{route('dashboard')}}>
        <i class="fas fa-home"></i>     
        <p>Home</p>   
      </a>
      </li>
      <li >
        <a href={{route('users.all')}}>
         <i class="far fa-user"></i>    
         <p>Users</p>
    </a>
      </li>
      <li >
        <a class="Categories" href={{route('categories.all')}}>    
        <i class="fas fa-shapes"></i>
        <p> Categories</p>
      </a>
      </li>
      <li>
        <a href={{route('products.all')}}>    
        <i class="fas fa-mail-bulk"></i>
        <p>products</p>   
      </a>
      </li>
      <li >
        <a href={{route('comments.all')}}>
        <i class="fas fa-comments"></i>    
        <p> Comments</p>
        </a>
      </li>
     
  
    </ul>
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-2 col-sm-12 filters">
        @if ( Auth::user()->role=="admin")
        @if (app()->getLocale()=="en")
        <form class="formmmmm" action="{{route('products.search')}}" method="post">
          @csrf
        <input type="text" name="name_en" class="form-control">
                  <button type="submit"><i class="fas fa-search"></i></button>

        </form>
        @else
        <form class="formmmmm" action="{{route('products.search')}}" method="post">
          @csrf
        <input type="text" name="name_ar" class="form-control">
                  <button type="submit"><i class="fas fa-search"></i></button>

        </form>

            
        @endif
        <h3>The Number of Products is  {{$product->count()}}</h3> 
        <a href={{route('products.create')}}><button>Add New product</button></a>

@else
<h3>The Number of Products is  {{$product->count()}}</h3> 
@if (app()->getLocale()=="en")
<form class="formmmmm" action="{{route('products.searchh')}}" method="post">
  @csrf
<input type="text" name="name_en" class="form-control">
          <button type="submit"><i class="fas fa-search"></i></button>

</form>
@else
<form class="formmmmm" action="{{route('products.searchh')}}" method="post">
  @csrf
<input type="text" name="name_ar" class="form-control">
          <button type="submit"><i class="fas fa-search"></i></button>

</form>

    
@endif


        @endif
       


    
  

          
          
        </div>
  
 <div class="col-md-9 col-sm-12"> 
  


    <div class="row">
        

     @foreach ($product as $pro )
     <div  class="col-md-4 col-sm-12">
     <div class=" maincard">
       <div class="divcardimg">
      <img src="{{asset('images/products/'.$pro->image)}}" class="img1card" alt="" />
      <img src="{{asset('images/products/'.$pro->sub_images)}}" class="img2card"  alt="" />
       </div>
       @if (app()->getLocale()=="en")


      <h3>{{$pro->name_en}}</h3>
      <p>{{$pro->name_en }}</p>
      @else
      <h3>{{$pro->name_ar}}</h3>
      <p>{{$pro->description_ar }}</p>

      @endif

      <h5>{{$pro->current_price}}$ <small><del>{{$pro->old_price}}$</del></small></h5>
      <div class="parenticon">
        <div class="ppppp"><p>+</p></div>
        <div class="piconsss">
          @if ( Auth::user()->role=="admin")


          <a href="{{route('products.delete', $pro->id) }}"><i class="fas fa-trash"></i></a>
         <a href="{{route('products.edit', $pro->id) }}"><i class="fas fa-edit"></i></a>
         
         @endif
         <a href="{{route('showw', $pro->id) }}"><i class="fas fa-eye"></i></a>

             
        </div>

    </div>
     </div>
     </div>
      


      @endforeach
      </div>


        </div>


      </div>
    </div>



    <footer>
      <div class="container">
          <div class="row">
              <div class="col-md-2 col-sm-12">
                  <h3>Company</h3>
                      <p>About Us</p>
                      <p>Contact</p>
                      <p>Store Locations</p>
                      <p>Careers</p>


              </div>
              <div class="col-md-2 col-sm-12">
                  <h3>Help</h3>
                      <p>Order Tracking</p>
                      <p>FAQ's</p>
                      <p>Privacy Policy</p>
                      <p>Terms & Conditions</p>


              </div>
              <div class="col-md-2 col-sm-12">
                  <h3>Follow Us</h3>
                  <p>And get Free Shipping on all your orders!</p>
                  <div class="divicons">
                      <div><i class="fab fa-facebook-f"></i></div>
                      <div><i class="fab fa-twitter"></i></div>
                      <div><i class="fab fa-pinterest-p"></i></div>

                  </div>

              </div>
              <div class="col-md-6 col-sm-12">
                  <h3>Sign up now & get 10% off</h3>
                  <p>Be the first to know about our new arrivals and exclusive offers.</p>
                  <form>
                      <input type="email" placeholder="Your email address" />
                      <input type="submit" placeholder="Subscribe" />
                  </form>

              </div>

          </div>
      </div>
  </footer>

























  </div>








@endsection