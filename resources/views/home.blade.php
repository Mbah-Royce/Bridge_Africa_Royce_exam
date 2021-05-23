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
        /* border:solid 1px gray; */
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
    width: 100%;
    height: 100%;
  }
  .pim{
    margin-top: 10%;
  }
  .only:hover{
    background-color: #555;
    color:#f1f1f1;
    border-radius: 10px;
  }
  .logo{
    width: 100px;
    height: 100px;
  }
  .del:hover{
    background-color: #555;
    cursor: pointer;
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
          <li class="only"></i><a href="{{ route('register') }}"><span style="color:black">Home</a></li>
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
                  <li><a href="#">Profile</a></li>
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
  </div>
  <div class="below">
    <ul class="list">
      <li>Business</li>
      <li>Inbox</li>
      <li>Notifications</li>
      <li>Pending Post</li>
      <li>Insights</li>
      <ul>
        <div style="float: right;margin-right:20%;margin-top:2%;">
          <a style="color:rgb(255, 81, 0);text-decoration:underline;font-size:17px">setting</a></div>

  </div>
<div class="main">
  <div class="left_side"></div>
  <div class="gallery">
    <div class="display">
    <div class="adv"></div>
      <div class="adv"></div>
        <div class="adv"></div>
          <div class="adv"></div>
            <div class="adv"></div>
              </div>
    <div class="middle">
      <div class="canvas"></div>
      <div class="info"><span style="font-weight: bold">Mbah Royce Chum</span> alemchu123@yahoo.com</div>
      <div class="links" style="float: right;margin-bottom:20%;">
        <button style="background-color: green;border-radius:5px;   margin-left: 10px;width:30%;
        "><span style="color:white">Promote</button>
        <button style="background-color: orange;border-radius:5px;    margin-left: 10px;width:30%;
        "><span style="color:white">Contact</button>
        <button style="background-color: rgb(255, 81, 0);border-radius:5px;    margin-left: 10px;width:30%;
        "><span style="color:white">website</span></button>
      </div>
    </div>
    
    <div class="prodpics">
      <div class="pim">
        <div class="col-md-4">
          
            {{-- <a href="#" class="logo"><span class="glyphicon glyphicon-plus">Add Products/services</a> --}}
              <a href="{{route('product.create')}}" class="btn btn-info btn-lg" style="margin-right: 90px">
                <span class="glyphicon glyphicon-plus"></span>
                Add Products/services  
              </a>
          
        </div>
     @if($products->count() > 0)
        @foreach($products as $product)
            <div class="col-md-4">
              <div class="thumbnail">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      @if($product->user_id==Auth::user()->id)
                      <li><a href="{{route('product.edit',$product->id)}}">Edit</a></li>
                      <li class="del" onclick="event.preventDefault();
                            if(confirm('Are you sure you really want to delete') )   {
                            document.getElementById('form-delete-{{$product->id}}')
                            .submit()
                            }">Delete</li>
                            <form style="display:none" id="{{'form-delete-'.$product->id}}" method="post" action="{{route('product.destroy',$product->id)}}">
                                @csrf
                                @method('delete')
                                </form>
                                @else
                                <li><p>Not Your Product<p></li>
                                  <li><p style="text-decoration: line-through">Edit<p></li>
                                    <li><p style="text-decoration: line-through">Delete<p></li>
                                      @endif
                    </ul>
                  </div>
                  <img src="{{asset('/storage/proimages/'.$product->avatar)}}" alt="Lights" style="width:50%">
                  <div class="caption">
                    <p> {{$product->name}}</p>
                  </div>
                </a>
              </div>
            </div>
            @endforeach
        </div>
        @else
        <h2>No Products/services Avaialable</h2>
        @endif
    </div>              
  </div>
  <div class="right_side"></div>
</div>
  <div class="footer"></div>
  <div class="copyright"></div>

</div>


</body>
</html>


