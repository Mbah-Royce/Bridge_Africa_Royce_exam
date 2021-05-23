@extends('layouts.mylayout')

@section('mycontent')
<div class="container" style="margin-top: 10%;width:50%" >
   <h3>Upload a profile Picture</h3> 
   <x-alert/>
<form action="/upload" method="POST" enctype="multipart/form-data" class="form-horizontal">
    @csrf
    <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
            <input type="file" name="image">
        </div>
      </div>  
      <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
            <input type="submit" value="upload">
        </div>
      </div>  
    </form>

    <h3>Upload Login Credentials</h3> 
    <form class="form-horizontal" action="{{route('profile.update',Auth::user()->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="password">
            </div>
          </div> 
          <div class="form-group">
            <label class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-10">
                <input type="password" name="password">
            </div>
          </div>  
          <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email">
            </div>
          </div>  
        </form>
</div>
@endsection