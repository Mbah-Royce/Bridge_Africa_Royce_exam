@extends('layouts.mylayout')

@section('mycontent')
<div class="container" style="margin-top: 10%;width:50%" >
  <x-alert/>
    <h2>Create Form: Please Fill the details concerning product</h2>
    <a href={{route('product.show')}}><span class="glyphicon glyphicon-arrow-left	"></span>Back</a>
    <form class="form-horizontal" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf      
        <div class="form-group">
        <label class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
          <input class="form-control"  type="text" name="name">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
            <textarea name="description"  rows="8" cols="50" placeholder="Description"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Price</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="price">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">The item is on discount</label>
        <div class="col-sm-10">
            <input type="checkbox" value="1"name="discount">       
         </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Condition</label>
        <div class="col-sm-10">
            <input type="text" name="condition">         
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">This is a service ?</label>
        <div class="col-sm-10">
            <input type="checkbox" value="1"  name="inservice">        
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">In Stock ?</label>
        <div class="col-sm-10">
            <input type="checkbox" value="1"  name="instock">        
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Published ?</label>
        <div class="col-sm-10">
            <input type="checkbox" value="1"  name="published">        
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
            <i class="fas fa-images" width="200"><input type="file" name="image"></i>
        </div>
      </div>
     <div style="border:broken 20px">
     </div>
     <input type="submit" value="save">
    </form>
  </div>
@endsection