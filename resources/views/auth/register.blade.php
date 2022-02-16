@extends('layouts.app')

@section('content')
<div class="container allformregister">
       
    

                <div class="row ">
          
                 
       
                    <form class="col-md-6" method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group ">
                            <label for="name" class=" col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-11">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-11">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-11">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-11">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class=" col-form-label text-md-right">{{ __('Avatar') }}</label>

                            <div class="col-md-11">
                                <input  type="file" class="form-control" name="avatar"  required >


                            </div>
                        </div>


                        <div class="form-group  ">
                            <div class="">
                                <button type="submit" class="btn btn-primary submittt">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                
                <div class="col-md-6">
                    <img src="{{asset('images/attachment.jpg')}}" alt="">
                </div>

   
    </div>
</div>
@endsection
