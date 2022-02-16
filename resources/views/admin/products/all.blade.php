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


    <section>
      <div class="container">
          <div class="row">
              <div class="col-md-3 col-sm-12">
                  <div >
                      <div class="divsec2">
                          <img src="{{asset('images/cate-df-3_360x.jpg')}}" alt="" />
                      </div>

                      <div class="flexy"><h3>Clothing</h3><p> 5 items</p></div>
                  </div>

              </div>
              <div class="col-md-3 col-sm-12">
                  <div >
                      <div class="divsec2">

                          <img src="{{asset('images/cate-df-2_360x.jpg')}}" alt="" />
                      </div>

                      <div class="flexy"><h3>Bag Brand</h3><p> 20 items</p></div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-12">
                  <div >
                      <div class="divsec2">

                          <img src="{{asset('images/cate-df-1_360x.jpg')}}" alt="" />
                      </div>

                      <div class="flexy"><h3>Accessories</h3><p> 6 items</p></div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-12">
                  <div >
                      <div class="divsec2">

                          <img src="{{asset('images/cate-df-4_360x.jpg')}}" alt="" />
                      </div>

                      <div class="flexy"><h3>Shoes</h3><p> 8 items</p></div>
                  </div>
              </div>

          </div>



      </div>



  </section>
 
  <section class="sec4">
    <div class="container">
        <div class="row js">
            <div  class="col-md-8 col-sm-12 div1sec4">
                <div class="div11sec4">

                    <h5>MERRY</h5>
                    <h4>Christmas</h4>
                    <div class="flexywrite">
                        <h3>40</h3>
                        <div>
                            <p>%</p>
                            <p class="ptwo">Off</p>


                        </div>

                    </div>
                    <button>Shop Now</button>

                </div>
            </div>
            <div  class="col-md-3 col-sm-12 div2sec4">
                <div class="div11sec4">
                    <h5>Your Next</h5>
                    <h4>Purchase</h4>
                    <div class="flexywrite">
                        <h3>10</h3>
                        <p> % Off</p>
                    </div>
                    <button>Shop Now</button>

                </div>
            </div>
        </div>
    </div>
</section>
 
    <div class="container-fluid">

    <div class="row">
      <div class="col-md-2 col-sm-12 filters">
        <h3>The Number of Products is  {{$products->count()}}</h3> 
        <a href={{route('products.create')}}><button>Add New product</button></a>


        <div>
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

  
  
        </div>
  

          
          
        </div>
  


        <div class="col-md-9 col-sm-12"> 
  

   @if ($products->count()>0)

    <div class="row">

     @foreach ($products as $product )
     <div  class="col-md-4 col-sm-12">
     <div class=" maincard">
       <div class="divcardimg">
      <img src="{{asset('images/products/'.$product->image)}}" class="img1card" alt="" />
      <img src="{{asset('images/products/'.$product->sub_images)}}" class="img2card"  alt="" />
       </div>
       @if (app()->getLocale()=="en")


      <h3>{{$product->name_en}}</h3>
      <p>{{$product->description_en }}</p>
      @else
      <h3>{{$product->name_ar}}</h3>
      <p>{{$product->description_ar }}</p>

      @endif

      <h5>{{$product->current_price}}$ <small><del>{{$product->old_price}}$</del></small></h5>
      <div class="parenticon">
        <div class="ppppp"><p>+</p></div>
        <div class="piconsss">

          <a href="{{route('products.delete', $product->id) }}"><i class="fas fa-trash"></i></a>
         <a href="{{route('products.edit', $product->id) }}"><i class="fas fa-edit"></i></a>
         <a href="{{route('products.show', $product->id) }}"><i class="fas fa-eye"></i></a>

             
        </div>z

    </div>
     </div>
     </div>
      


      @endforeach
      </div>


  @else 
  <div class='alert alert-danger'>there is no product</div>





@endif
        </div>


      </div>
    </div>

    <section class="sec6">
      <div class="container">
          <div class="row divproduct">
              <div class="col-md-8 col-sm-12">
                  <div class=" row productsshow">
                      <div class="col-md-4 col-sm-12">
                          <img src={{asset('images/126092902_363731078221416_3923172392216927851_n.jpg')}} alt="" />
                          <div class="productdivv">
                              <i class="fab fa-instagram"></i>
                              
                          
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-12">
                      <img src={{asset('images/125805091_1244092065966946_7480077131728639836_n.jpg')}} alt="" />
                      <div class="productdivv">
                      <i class="fab fa-instagram"></i>
                      

                      </div>

                      </div>
                      <div class="col-md-4 col-sm-12">
                      <img src={{asset('images/126106436_366020964688525_7792254897032838113_n.jpg')}} alt="" />
                      <div class="productdivv">
                      <i class="fab fa-instagram"></i>
                      

                      </div>

                      </div>
                      <div class="col-md-4 col-sm-12">
                      <img src={{asset('images/126398977_221851472632792_6291091317212891166_n.jpg')}} alt="" />
                      <div class="productdivv">
                      <i class="fab fa-instagram"></i>
                      

                      </div>

                      </div>
                      <div class="col-md-4 col-sm-12">
                      <img src={{asset('images/126197996_385197312744633_6397005439344767247_n.jpg')}} alt="" />
                      <div class="productdivv">
                      <i class="fab fa-instagram"></i>
                      

                      </div>

                      </div>
                      <div class="col-md-4 col-sm-12">
                      <img src={{asset('images/125474066_691332491496782_8130376826513537460_n.jpg')}} alt="" />
                      <div class="productdivv">
                      <i class="fab fa-instagram"></i>
                      

                      </div>

                      </div>
                  </div>

              </div>
              <div class="col-md-4 col-sm-12" class="colproduct">
                  <h3>
                  Vintage Style
                  </h3>
                  <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                  </p>
                <div class="flexyyyyy"><div></div>  <h5>#Lusiontheme</h5></div>
              </div>
          </div>
      </div>
  </section>

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