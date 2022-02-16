@extends('layouts.admin')
@section('admintitle','categories')
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








</div>
</div>
</div>



</div>





@endsection