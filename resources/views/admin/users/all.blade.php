@extends('layouts.admin')
@section('admintitle','dashboard')
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
          <div class="card-header header11">
            <h3>The Number of users is : {{$DBUsers->count()}}</h3> 
              <a  href={{route('users.create')}}><button>Add New User</button></a>
           
          </div>
        
        
        
          @if ($DBUsers->count()>0)
        
        
        
 <div class="card-body">

      <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">image</th>
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
        <td><a href="{{route('users.delete', $muser->id) }}">Delete</a></td>
        <td><a href="{{route('users.edit', $muser->id) }}">Edit</a></td>

      </tr>
      @endforeach

    </tbody>
  </table>
 
 </div>
  @else 
  <div class='alert alert-danger'>there is no user</div>





@endif
        </div>





  <hr>





</div>
</div>
</div>


</div>





@endsection