@extends('layouts.admin')
@section('admintitle','dashboard')
@section('section')

<div>

  <nav >

    <ul class="list">
      <h3 class="closenav" onclick="navOff()" >&#x2715</h3>
      <li>
        <a  href={{route('mainhome')}}>
        <i class="fas fa-home"></i>
        <p>mainPage</p>
      </a>
      </li>
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


    </nav>

<div class="container-fluid">



<div class="row ddd">
  <div class="col-md-3 col-sm-12">
    <div class="userscard">
    <a href={{route('users.all')}}>
    <i class="far fa-user"></i>
    <h3>Number of Users is <br> {{$DBUsers->count()}} </h3>

    </a>
     </div>
  </div>
  <div class="col-md-3 col-sm-12" >
   <div class="categoriescard">
    <a href={{route('categories.all')}}>
    <i class="fas fa-shapes"></i>

    <h3>Number of Categories is <br> {{$categories->count()}} </h3>
    </a>
    </div>
  </div>
  <div class="col-md-3 col-sm-12 ">"
    <div class="commentscard">
      <a href={{route('comments.all')}}>
      <i class="fas fa-comments"></i>

      <h3>Number of Comments is <br> {{$comments->count()}} </h3>
      </a>
    </div>
  </div>
  <div class="col-md-3 col-sm-12 ">
    <div class="productscard">
    <a href={{route('products.all')}}>
    <i class="fas fa-mail-bulk"></i>

    <h3>Number of Products is <br> {{$products->count()}} </h3>
    </a>
     </div>
   </div>

</div>

<div class="container">

<div class="card" >
        <div class="card-header header11">
          <h3>The Number of users is : {{$DBUsers->count()}}</h3>
            <a  href={{route('users.create')}}><button>Add New User</button></a>

        </div>
      <form action="{{route('users.search')}}" method="post">
        @csrf
      <input type="text" name="email" class="form-control">
      <input type="submit" >
      </form>


        @if ($DBUsers->count()>0)



        <div class="card-body">

          <table class="table  ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Image</th>
                <th scope="col">Controls</th>


              </tr>
            </thead>
            <tbody>
              <!--   @foreach ($DBUsers as $dbuser )


              <tr>
                <th scope="row">{{$dbuser->id }}</th>
                <td>{{$dbuser->name }}</td>
                <td>{{$dbuser->email }}</td>
                <td>{{$dbuser->role }}</td>
              </tr>
              @endforeach
            -->
                @foreach ($mUsers as $muser )


              <tr>
                <th scope="row">{{$muser->id }}</th>
                <td>{{$muser->name }}</td>
                <td>{{$muser->email }}</td>
                <td>{{$muser->role }}</td>
                <td><img class="" src="{{asset('images/users/'. $muser->avatar )}}" alt="" width="100px"  height="50px"/> </td>
                <td>
                  <a href="{{route('users.delete', $muser->id) }}">Delete</a>
                  <a href="{{route('users.edit', $muser->id) }}">Edit</a>


                </td>

              </tr>
              @endforeach

            </tbody>
          </table>
        <!--  {{$mUsers->links()}}-->


        </div>




        @else
        <div class='alert alert-danger'>there is no user</div>





      @endif

</div>


 <!-- @if (session('success'))
  <div class="alert alert-success">
{{session('success')}}
  </div>
@endif-->
<div class="card" >
      <div class="card-header header2">
        <h3>The Number of Categories is : {{$categories->count()}}</h3>
        <a  href={{route('categories.create')}}><button>Add New Category</button></a>
      </div>

      @if ($categories->count()>0)

        <div class="card-body">
      <table class="table">

        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">status</th>
          </tr>
        </thead>
        <tbody>


            @foreach ($categories as $category )


            <tr>
              <th scope="row">{{$category->id }}</th>
              <td>{{$category->title_en }}</td>
              <td>{{$category->description_en}}</td>
              <td>{{$category->status }}</td>
            </tr>
            @endforeach


        </tbody>
      </table>
        </div>
      @else
            <div class='alert alert-danger'>there is no category</div>

      @endif

</div>

<div class="card" >
          <div class="card-header header3">
            <h3>The Number of Products is : {{$products->count()}}</h3>
              <a href={{route('products.create')}}><button>Add New product</button></a>

          </div>
      @if ($products->count()>0)
      <div class="card-body">


        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">product Name</th>
              <th scope="col">description</th>
            <th scope="col">image</th>
              <th scope="col">sub_image</th>
              <th scope="col">old price</th>
              <th scope="col">current price</th>
              <th scope="col">amount</th>
            <!--  <th scope="col">category id</th>-->
              <th scope="col">status</th>
              <th scope="col">controls</th>

            </tr>
          </thead>
          <tbody>


              @foreach ($products as $product )



          <tr>
              <th scope="row">{{$product->id }}</th>
              <td>{{$product->name_en }}</td>
              <td>{{$product->description_en }}</td>
            <td> <img height="50px" width="100px" src="{{asset('images/products/'.$product->image)}}"></td>
            <td> <img height="50px" width="100px" src="{{asset('images/products/'.$product->sub_images)}}"></td>

              <td>{{$product->old_price }}</td>
              <td>{{$product->current_price }}</td>
              <td>{{$product->amount }}</td>
              <!--<td>{{$product->category_id }}</td>-->
              <td>@if ($product->status===1)
              <p>visible</p>

              @else
              <p>hidden</p>
              @endif
                </td>
                <td><a href="{{route('products.delete', $product->id) }}"><button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button></a>
                    <a href="{{route('products.edit', $product->id) }}"><button type="button" class="btn btn-outline-info"><i class="fas fa-edit"></i></button> </a>
                    </td>


            </tr>
            @endforeach

        </tbody>
        </table>
      </div>

        @else
        <div class='alert alert-danger'>there is no product</div>


        @endif
</div>


<div class="card" >
  <div class="card-header header4">
    <h3>The Number of Caomments is {{$comments->count()}}</h3>
    <a  href={{route('comments.create')}}><button>Add New comment </button></a>
  </div>


 @if ($comments->count()>0)
 <div class="card-body">

    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">comment</th>
        <th scope="col">product_id</th>

        <th scope="col">user_id</th>
        <th scope="col">status</th>



      </tr>
    </thead>
    <tbody>

        @foreach ($comments as $comment )


      <tr>
        <th scope="row">{{$comment->id }}</th>
        <td>{{$comment->comment }}</td>
        <td>{{$comment->product_id }}</td>
        <td>{{$comment->user_id }}</td>
        <td>{{$comment->status }}</td>



      </tr>
      @endforeach

    </tbody>
  </table>
 </div>


  @else
  <div class='alert alert-danger'>there is no comments</div>

  @endif


</div>
</div>
  </div>






@endsection
