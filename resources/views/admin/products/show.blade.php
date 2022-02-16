@extends('layouts.admin')
@section('admintitle','products Control')
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
      @if ( Auth::user()->role=="admin")

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
        @endif
    
    
    <div class="allshow">
       

      <div class="row align-items-center">
            <div class="col-md-6 d-flex ">
              <img width="100%" src="{{asset('images/products/'. $product->image)}}" alt="" >
              <img width="100%" src="{{asset('images/products/'. $product->sub_images)}}" alt="" >


            </div>
            <div class="col-md-6 showww">
              @if (app()->getLocale()=="en")
              <h3>{{$product->name_en}}</h3>
              <p>{{$product->description_en}}</p>


              @else
              <h3>{{$product->name_ar}}</h3>
              <p>{{$product->description_ar}}</p>
                
              @endif



              <div>
             
                <h5>{{$product->current_price}}$ <del><small>{{$product->old_price}}$</small></del></h5>
              </div>

              <div class="d-flex">
                <div>
                  <h4>The Amount </h4>
                  <p>{{$product->amount}}</p>
                </div>
                <div>
                  <h4>The Status </h4>
                  <p>
                    @if ($product->status==1)
                    Visible
                    @else
                    Hidden

                      
                    @endif
                    
                  </p>
                </div>

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