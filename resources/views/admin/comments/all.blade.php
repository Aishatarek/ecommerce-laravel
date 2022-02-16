@extends('layouts.admin')
@section('admintitle','comments')
@section('section')
<div>


  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 col-sm-12">
  
          <ul class="list">
      
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
  
      <div class="col-md-9 col-sm-12">
        <div class="card">
        <div class="card-header header4">
          <h3>The Number of Caomments is {{$comments->count()}}</h3> 
          <a  href={{route('comments.create')}}><button>Add New comment </button></a>
        </div>
      
      
       @if ($comments->count()>0)
       <div class="card-body">
      

<table class="table">
    <div>The Number of poducts is {{$comments->count()}}</div>
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
  {{$comments->links()}}
       </div>
  @else 
  <div class='alert alert-danger'>there is no comments</div>





@endif



      </div>




</div>
</div>
</div>


</div>





@endsection