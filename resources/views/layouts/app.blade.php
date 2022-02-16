<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


<style>
         .formmmmm {
         display: flex;
         align-items: baseline;
       }
      .formmmmm input[type="text"]{
        border: none;
        border-bottom: 1px solid #79aec3 !important;
        outline: none;
        border: none;
        background-color: transparent;
        border-radius: 0% !important;



      }
      .formmmmm button{
        border: none;
        background-color: transparent !important;
        background: none !important;
        color: #3783a1 !important;
        outline: none;
        border-bottom: 1px solid #79aec3 !important;


      }
         .avatarr{
            border-radius: 50%;
        }

.allformregister{
margin-top: 20px;
}
.allformregister .row{
    align-items: center;
    padding: 0;
}
.allformregister .col-md-6{
    padding: 0;

}
.allformregister form{
    background-color: white;
    height: 80vh;
    padding: 50px !important;
    text-align: left !important;

}

.allformregister img{
    width: 100%;
    height: 80vh;
}
.submittt{
    margin-left: 10px;
    background-color: #6b5dfa;
    padding:5px 30px;
    border: none;
    margin-bottom: 30px;
    font-size: 25px;
    transition: all 1s ease-in-out;
}
.submittt:hover{
background-color: #c2cafd;
color: #6b5dfa;

}
.nn .form-group{
    margin-top: 30px;
}
.opennav{
            font-size: 35px;
            color:#79aec3 ;
            margin-left: -100px;
            cursor: pointer;

        }
        .closenav{
            cursor: pointer;
            font-size: 35px;
            color:#79aec3 ;
            margin-left: 100px;
            margin-top: 10px;

        }
        .navbar{
            background-color: #f8fafc !important;
            box-shadow: none !important;
        }
.carousel-caption{
    position: absolute;
    top:30%;
    left: 10%;
    width :30%;
    text-align: center;

}
.carousel-caption h5{
    font-family: 'Jost', sans-serif;
    font-weight: 500 !important;
  font-size: 100px;
  font-weight: 500;
  color: rgb(0, 0, 0);
text-transform: uppercase;
letter-spacing: 10px;
text-align: center;

}
.filters{
    background-color: white;
    padding: 30px;
    margin: 40px;
}
.filters h3{
color: rgba(16,155,211,1);
margin: 30px 0px;
    font-size: 30px;
    text-align: center;

}
.filters button{
    background: rgb(58,209,190);
background: linear-gradient(90deg, rgba(58,209,190,1) 0%, rgba(16,155,211,1) 100%);

    padding: 10px  !important;
    border: none !important;
    font-size: 20px;
    color: white;
}
.divcardimg{
    position: relative;
}
.divcardimg .img1card{
    transition: all 1s ease-in-out;
    position: absolute;
    top: 0;
    left: 0;
    height: 250px;
    width: 100%;
z-index: 2;
}
.img2card{
    height: 250px;
    width: 100%;


}
.img2card:hover{
z-index: 222;
}
.img1card:hover {
    transition: all 1s ease-in-out;

z-index: -11 !important;

}
.maincard{
background-color: white !important;'
height: 700px;
width:90%;
padding:10px;
text-align:center;
margin:40px 0px;
}
.maincard h3{
    margin: 20px 0px;
    font-family: 'Jost', sans-serif;
    font-weight: 600 !important;
  font-size: 50px;
}
.maincard p{
    color: #a1a1a1;
    font-size: 15px;
}
.maincard h5{
    font-size: 25px;
    color: #badbfc;
}

.ppppp{
  background-color:#79aec3 ;
  font-size: 20px !important;
  display: flex;
  justify-content: center;
  align-items: center;
height: 40px;
width: 40px;
transition: all 1s ease-in-out;
cursor: pointer;
margin-left: 255px;
}
.ppppp p{
  margin-top: 9px;
  font-size: 50px;
color: white;
cursor: pointer;
font-weight: 100 !important;
}
.parenticon{
  position: relative;
}
.piconsss{
  position: absolute;
  top: 0%;
  right: 0;
  z-index: 222;
  background-color: white;
  border-right: 1px solid #79aec3;
  display: flex;
  width: 0;
  overflow: hidden;


}
.piconsss:hover{
    width: auto;

}
.piconsss i{
  cursor: pointer;
  display: inline-block;
  height: 40px;

  font-size: 30px;
  border: 1px solid #c4c3c3;
  padding: 5px;
  color: #a1a1a1;

}
.ppppp:hover ~ .piconsss{

  width: auto !important;

}
.list{

    position: fixed;
    background-color: transparent;
    top: 0;
    left: 0;
    list-style: none;
    height: 100%;
    display: flex;
z-index: 222;
    flex-direction: column;
    width: 0 ;
    overflow: hidden ;
}
.list li{
    background-color: white;
    text-align: center;
    padding: 10px;
   margin: 10px 0px;

    border-radius: 2%;
    border-bottom: 1px;
    }
.list li a{

  color: grey;
font-size: 25px;


}
.home{
    color: #33a799 !important;
}
.list li a:hover{
    color: #33a799;
    text-decoration: none;
}



.ddd{
justify-content: space-around;}

.userscard{
    background: rgb(58,209,190);
background: linear-gradient(90deg, rgba(58,209,190,1) 0%, rgba(16,155,211,1) 100%);
text-align: center;
width: 100%;
height: 210px;
padding: 40px;
border-radius: 2%;
margin: 30px 0px;
}
.userscard a{
    font-size: 30px;
color: white;
text-decoration: none;
}
.userscard a:hover{
    text-decoration: none;
    color: teal;
}
.categoriescard{
    background: rgb(255,135,94);
    background: linear-gradient(90deg, rgba(255,135,94,1) 0%, rgba(253,108,159,1) 100%);
text-align: center;
width: 100%;
height: 210px;
margin: 30px 0px;


padding: 40px;
border-radius: 2%;
}
.categoriescard a{
    font-size: 30px;
color: white;
text-decoration: none;
}
.categoriescard a:hover{
    text-decoration: none;
    color: rgb(238, 213, 213);
}
.commentscard{
    background: rgb(238,111,234);
background: linear-gradient(90deg, rgba(238,111,234,1) 0%, rgba(131,99,249,1) 100%);
text-align: center;
width: 100%;
height: 210px;
margin: 5px 0px;

padding: 40px;
border-radius: 2%;
}
.commentscard a{
    font-size: 30px;
color: white;
text-decoration: none;
}
.commentscard a:hover{
    text-decoration: none;
    color: purple;
}
.productscard{
    margin: 30px 0px;

    background: rgb(242,158,75);
background: linear-gradient(90deg, rgba(242,158,75,1) 0%, rgba(244,202,96,1) 100%);
text-align: center;
width: 100%;
height: 210px;
margin-top: 30px;
padding: 40px;
border-radius: 2%;
}
.productscard a{
    font-size: 30px;
color: white;
text-decoration: none;
}
.productscard a:hover{
    text-decoration: none;
    color: rgb(253, 240, 180);
}
/******************************************************/
.card{
margin-top: 30px;
padding: 0 !important;
border: none !important;
}

.header11{
    background: rgb(58,209,190);
    background: linear-gradient(90deg, rgba(58,209,190,1) 0%, rgba(16,155,211,1) 100%);
    display: flex;
    justify-content: space-between;
    color: white;
    align-items: center;
}
.header11 button{
    background: rgb(58,209,190);
    background: linear-gradient(90deg, rgba(16,155,211,1) 0%,  rgba(58,209,190,1) 100%);

    padding: 10px 20px !important;
    border: none !important;
    font-size: 20px;
    color: white;
}

.header2{
    background: rgb(255,135,94);
    background: linear-gradient(90deg, rgba(255,135,94,1) 0%, rgba(253,108,159,1) 100%);
    display: flex;
    justify-content: space-between;
    color: white;
    align-items: center;
}
.header2 button{
    background: rgb(255,135,94);
    background: linear-gradient(90deg, rgba(253,108,159,1) 0%, rgba(255,135,94,1) 100%);

    padding: 10px 20px !important;
    border: none !important;
    font-size: 20px;
    color: white;
}
.header3{
    background: rgb(238,111,234);
background: linear-gradient(90deg, rgba(238,111,234,1) 0%, rgba(131,99,249,1) 100%);
    display: flex;
    justify-content: space-between;
    color: white;
    align-items: center;
}
.header3 button{
    background: rgb(238,111,234);
background: linear-gradient(90deg, rgba(131,99,249,1) 0%, rgba(238,111,234,1) 100%);

    padding: 10px 20px !important;
    border: none !important;
    font-size: 20px;
    color: white;
}
.header4{

    background: rgb(242,158,75);
background: linear-gradient(90deg, rgba(242,158,75,1) 0%, rgba(244,202,96,1) 100%);
    display: flex;
    justify-content: space-between;
    color: white;
    align-items: center;
}
.header4 button{

    background: rgb(242,158,75);
background: linear-gradient(90deg, rgba(244,202,96,1) 0%, rgba(242,158,75,1)  100%);

    padding: 10px 20px !important;
    border: none !important;
    font-size: 20px;
    color: white;
}
/*****************************************/
.alert-danger{

    width: 90%;

    margin: 20px auto;

}

/*************************************************/
.formm{
    background-color: white !important;
    margin-top: 40px;
padding:50px 30px;
border-radius: 2%;
}
.formm2{
    background-color: white !important;
    margin-top: 40px;
padding:50px 30px;
border-radius: 2%;
}
.formm2 .fa-mail-bulk{

    background: rgb(238,111,234);

background: linear-gradient(90deg, rgba(238,111,234,1) 0%, rgba(131,99,249,1) 100%);
-webkit-background-clip: text ;
  -webkit-text-fill-color: transparent;
     font-size: 70px;
     margin-top: 10px;
 }
 .formm2 p{
     font-size: 20px;
     margin-top: 40px;

 }
 .formm2 p{

color: rgba(131,99,249,1) ;

 }
.dess{

}
.rtll{
    text-align: right;
    direction: rtl;
}
.formm p{
    color: red;
    text-align: center;
}
.formm label{
    margin-top: 20px
}
.formmh3{
    background: rgb(238,111,234);

 background: linear-gradient(90deg, rgba(238,111,234,1) 0%, rgba(131,99,249,1) 100%);
 -webkit-background-clip: text ;
   -webkit-text-fill-color: transparent;
       font-size: 35px;
   text-align: center;
}
.formm input , .formm select , .formm textarea{

    text-indent: 10px;
    width: 95%;
border: none;
border-bottom: 1px solid grey;
 }
 .formm .productsubmit{
    background: rgb(238,111,234);

background: linear-gradient(90deg, rgba(238,111,234,1) 0%, rgba(131,99,249,1) 100%);
       margin-top: 20px;
       border-radius: 2%;
       outline: none;
       color: white;
       padding: 10px;
       font-size: 20px;
 }
 .center{
     text-align: center;
 }
.formm .fa-mail-bulk{

    background: rgb(238,111,234);

background: linear-gradient(90deg, rgba(238,111,234,1) 0%, rgba(131,99,249,1) 100%);
-webkit-background-clip: text ;
  -webkit-text-fill-color: transparent;
     font-size: 70px;
     margin-top: 10px;
 }
.formm1h3{
    background: rgb(58,209,190);
    background: linear-gradient(90deg, rgba(16,155,211,1) 0%,  rgba(58,209,190,1) 100%);

 -webkit-background-clip: text ;
   -webkit-text-fill-color: transparent;
       font-size: 35px;
   text-align: center;
}
.submituser{
    background: rgb(58,209,190);
    background: linear-gradient(90deg, rgba(16,155,211,1) 0%,  rgba(58,209,190,1) 100%);
       margin-top: 20px;
       border-radius: 2%;
       outline: none;
       color: white;
       padding: 10px;
       font-size: 20px;
}
.formm .fa-user{
    background: rgb(58,209,190);
    background: linear-gradient(90deg, rgba(16,155,211,1) 0%,  rgba(58,209,190,1) 100%);
-webkit-background-clip: text ;
  -webkit-text-fill-color: transparent;
     font-size: 70px;
     margin-top: 10px;
}
/**********************/
.flexyyyy{
    display: flex;
    justify-content: space-between;
}
.arrrr{
    direction: rtl;
    text-align: right;
}
.categorysubmit{
    background: rgb(255,135,94);
    background: linear-gradient(90deg, rgba(255,135,94,1) 0%, rgba(253,108,159,1) 100%);
       margin-top: 20px;
       border-radius: 2%;
       outline: none;
       color: white;
       padding: 10px;
       font-size: 20px;

}
.formm2h3{
    background: rgb(255,135,94);
    background: linear-gradient(90deg, rgba(255,135,94,1) 0%, rgba(253,108,159,1) 100%);

 -webkit-background-clip: text ;
   -webkit-text-fill-color: transparent;
       font-size: 35px;
   text-align: center;
}
.formm .fa-shapes{
    background: rgb(255,135,94);
    background: linear-gradient(90deg, rgba(255,135,94,1) 0%, rgba(253,108,159,1) 100%);
-webkit-background-clip: text ;
  -webkit-text-fill-color: transparent;
     font-size: 70px;
     margin-top: 10px;
}
/**************************/
.commentsubmit{
        background: rgb(238,111,234);
background: linear-gradient(90deg, rgba(238,111,234,1) 0%, rgba(131,99,249,1) 100%);
       margin-top: 20px;
       border-radius: 2%;
       outline: none;
       color: white;
       padding: 10px;
       font-size: 20px;

}
.formm3h3{
        background: rgb(238,111,234);
background: linear-gradient(90deg, rgba(238,111,234,1) 0%, rgba(131,99,249,1) 100%);

 -webkit-background-clip: text ;
   -webkit-text-fill-color: transparent;
       font-size: 35px;
   text-align: center;
}
.formm .fa-comments{
        background: rgb(238,111,234);
background: linear-gradient(90deg, rgba(238,111,234,1) 0%, rgba(131,99,249,1) 100%);
-webkit-background-clip: text ;
  -webkit-text-fill-color: transparent;
     font-size: 70px;
     margin-top: 10px;
}
/**************************************/
footer{
  background-color: #f4f4f4;
  padding: 100px 0px;
}

footer h3{
  font-size: 30px;
  font-weight: 1000;
  margin-bottom: 30px;
}
footer p{
  margin-top: 20px;
  color: #2c2c2c;
}
.divicons{
  display: flex;
  justify-content: space-between;
  width: 70%;
  margin-top: 30px;

}
.divicons div{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 40px;
  width: 40px;
  border-radius: 50%;
  border: 1px solid #a1a1a1;
  color: #a1a1a1;
  margin-left: 5px;

}
.divicons div i{
  font-size: 20px;
}
.divicons div:hover{
  border: 1px solid #2c2c2c;

color: #2c2c2c;
}
footer input[type="email"]{
  margin-top: 20px;
  width: 70%;
  height: 50px;
  outline: none;
  border: none;
  text-indent: 10px;
  font-size: 20px;
}
footer input[type="submit"]{
  margin-top: 20px;

  width: 20%;
  height: 50px;
  outline: none;
  border: none;
  font-size: 20px;
background-color: black;
color: white;
transition: all 1s ease-in-out;
}
footer input[type="submit"]:hover{
  background-color: white;
color: black;
border:1px solid black;
}
/**********************************************/
.sec4{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Jost', sans-serif;

}
.js{
  justify-content: space-around;
}
.div1sec4{
  background-image: url({{asset('images/banner-2.png')}});
/**************/


  background-repeat: no-repeat;
  background-size: contain;
  background-position: right;
  background-color:#f4f4f4 ;
  position: relative;
  height: 70vh;
}
.div11sec4{
position: absolute;
top: 20%;
left: 10%;
text-align: center;

}
.div11sec4 h5{
  font-weight: 500;
font-size: 50px;
font-family: 'Jost', sans-serif;

}
.div11sec4 h4{
  font-weight: 900;
  margin-top: -30px;
  font-size: 70px;
}
.flexywrite{
  display: flex;
  text-align: center ;
  justify-content: center;
  align-items: center;
margin-top: -30px;
}
.flexywrite h3{
  font-size: 90px;
  font-family: 'Jost', sans-serif;

}
.flexywrite p{
  font-size: 30px;
  width: 30px;
  font-family: 'Jost', sans-serif;

}
.ptwo{
  margin-top: -30px;
}
.div11sec4 button{
  background-color: transparent;
  width: 150px;
  height: 60px;
  padding: 10px;
  font-size: 20px;
  transition: all 1s ease-in-out;
  border: 1px solid black;
font-weight: 700;

}
.div11sec4 button:hover{
  background-color: black;
  color: white;

}
.div2sec4{
  background-color: #e9e9e9;
  position: relative;
}
/********************/
.divsec2{
margin-top: 100px;
width: 250px;
overflow: hidden;
}
.divsec2 img{

  width: 100%;
transition: all 0.5s ease-in-out;
}
.divsec2 img:hover{
  transform: scale(1.1);
}
.flexy{
  padding: 20px ;
  display: flex;
  align-items: baseline;
  justify-content: space-between;
  margin-bottom: 100px;
}
.flexy p{
  font-size: 20px;
}
/*******************************/
.sec6{
    padding: 100px 0px;
  }
  .productsshow .col-md-4{
    padding: 0;
    position: relative;
    transition: all 1s ease-in-out;

  }
  .productsshow img{
    width: 100%;

  }
  .productdivv{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    display: none;


  }
  .productdivv i{
    color: black;
    font-size: 50px;
  }
  .productsshow .col-md-4:hover .productdivv{
    transition: all 1s ease-in-out;
    display: flex;

  }
  .rowproduct{
    align-items: center;
  }
  .colproduct{
    padding-left: 60px !important;
  }
  .colproduct h3{
font-size: 50px;
font-weight: 400;
margin-bottom: 50px;
  }
  .colproduct p{
    color: #a1a1a1;
    margin-bottom: 50px;
  }
.flexyyyyy{
  margin-top: 40px;
  display: flex;
  align-items: baseline;
  justify-content: flex-end;
}
.flexyyyyy h5{
  font-size: 30px;

}
.flexyyyyy div{
  height: 3px;
  width: 100px;
  background-color: black;
}
/*******************************/
.allshow{
    padding: 100px 50px;
}
.showww{
    padding-left: 100px;
}
.showww h3{
font-size: 50px;
font-family: 'Jost', sans-serif;
font-weight: 700;
}
.showww p{
    margin-top: 30px;
    font-size: 25px;
    color: #a1a1a1;
}
.showww h5{
    margin-top: 30px;

    font-size: 30px;
    color: #79aec3;
}
.showww .d-flex{
    align-items: center;
    width: 70%;
margin-top: 50px;
justify-content: space-between;
text-align: center;
}
.showww .d-flex p{

}
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a  href={{route('dashboard')}}>
                    dashboard
                  </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  {{--  <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>--}}
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-center dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <img class="avatarr" width="50px" height="50px" src=" {{asset('images/users/' . Auth::user()->avatar)}}" alt="" >
                                   <br>
                                   {{ Auth::user()->name }}

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main >
            @yield('content')
        </main>
    </div>
    <script src="{{asset('js/main.js')}}"></script>

</body>
</html>
