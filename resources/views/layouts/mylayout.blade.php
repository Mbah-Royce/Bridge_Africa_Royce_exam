<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>

  body{
    background-color: white;
  }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      border: white;
      box-shadow: #555;
      padding-top: 13px;
      height: 10%;
      }
      .whole{
        height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
      }
      .main{
        display: flex;
        flex-direction:row;
        background-color: black;
        width: 100%;
        height: 80vh
      }
      .bar{
        height: 11%;
        width: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid gray;
        box-shadow: 5px 5px 5px #888888;
        }
        .below{
          height: 10%;
        width: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid rgb(219, 217, 217);
        }
      .left_side{
        width: 12%;
        height: 100%;
        background-color: white;
      }
      .right_side{
        width: 12%;
        height: 100%;
        background-color:white;
      }
       .gallery{
        width: 76%;
        height: 100%;
        background-color: white;
        border:solid 1px gray;
      } 
    .cont{
      width: 80%;
      margin-left: 15%;
      margin-right: 20%
    }
    .nat{
      margin-left: 40
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    .but{
      background-color: white;
      border-radius: 0%;
      padding-top: 10px;
    }
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    .list{
      margin-bottom: 0;
      margin-left: 9.2%;
    }
    .list li{
      float: left;
      display:inline-block;
      border: solid 1px black;
      border-top-right-radius:5px;
      border-top-left-radius:5px;
       padding: 8px; 
      margin-top: 35px;
      
    }
    .adv{
      background-color: #888888;
      height: 90%;
      width: 25%;
      border: solid 1px;
    }
    .display{
      display:flex;
      flex-basis: column;
      height: 40%;
      width: 100%;
    }
    
  .middle{
    height:10%;
    width: 100%;
    display: flex;
    flex-basis: column;
  }
  .canvas{
    height: 70px;
    width: 70px;
    border: solid 1px;
    background-color: #888888;
    border-radius:80px;
  }
  .info{
    padding-top: 10px;
    height: 70px;
    margin-left: 10px;
    width: 200px;
    justify-items: center;
    
  }
  .links{
    margin-left: 40%;
    display: flex;
    flex-direction: row;
    width: 40%;
    height: 40px;
  }
  .prodpics{
    margin-top:20%;
    width: 100%;
    height:50%;
  }
  .only:hover{
    background-color: #555;
  }
  
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
<div class="whole">
  <div class="bar">
    <nav class="navbar navbar-inverse navbar-fixed-top  " style="background-color: white">
      <div class="cont container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
        <a class="navbar-brand" href="#"><span style="color:black">BRIDGE AFRICA</span></a>
        </div>
        @guest
                
            @else
            <form class="navbar-form navbar-left" action="/action_page.php">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" style="border-color: #f1f1f1;">
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" style="margin-left: 0px"></span></button>
    
              </div>
            </form>
            @endguest
    
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-left">
            
            @guest
            
            @else   
            <li class="only"><i class="fas fa-home"></i><a  href="{{ route('register') }}"><span style="color:black;">Home</a></li>
          <li><a  href="{{ route('register') }}"><span style="color:black">Marketplace</a></li>
          <li><a href="{{ route('register') }}"><span style="color:black">Comment</a></li>
          <li><a href="{{ route('register') }}"><span style="color:black">Notifications</a> </li>
            @endguest
          </ul> 
          <ul class="nat nav navbar-nav">
            @guest
    
            @if (Route::has('login'))
                  <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @endif
    
                @if (Route::has('register'))
                  <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @endif
          
    
           @else
            <li>
              <span>
                  @if(Auth::user()->avatar)
                  <img src="{{asset('/storage/images/'.Auth::user()->avatar)}}" class="img-circle" alt="adatar" width="40"/>
                      
                  @else
                  <img src="" alt="adatar" width="40" style="padding-top: 12px"/>
    
                  @endif
    
    
              </span></li>
    <li><div class="dropdown">
                <button class="but btn dropdown-toggle" type="button" data-toggle="dropdown"><span style="color:black"> {{ Auth::user()->name }}</span>
                <span class="caret"></span></button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a></li>
                  <li><a href="{{route('profile.update')}}">Profile</a></li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              </div></li>
          </li>
          </ul>
          @endguest
    
        </div>
      </div>
    </nav>
  @yield('mycontent')
</body>
</html>


