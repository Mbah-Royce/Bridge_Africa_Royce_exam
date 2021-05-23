@extends('layouts.mylayout')


@section('mycontent')
     <div class="container" style="margin-top: 10%;width:50%" >
      <x-alert/>
        <h2>Edit Form: Please Update the details concerning product</h2>
        <a href={{route('product.show')}}><span class="glyphicon glyphicon-arrow-left	"></span>Back</a>
        <form class="form-horizontal" action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf    
            @method('patch')  
            <div class="form-group">
            <label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input class="form-control"  type="text" name="name" value="{{$product->name}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <textarea name="description"  rows="8" cols="50" placeholder="Description" >{{$product->description}}</textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="price" value="{{$product->price}}">
            </div>
          </div>
    
          <div class="form-group">
            <label class="col-sm-2 control-label">The item is on discount</label>
            <div class="col-sm-10">
              @if($product->discount)
                <input type="checkbox" value="1"name="discount" checked>     
                @else 
                <input type="checkbox" value="1"name="discount">     
                  @endif
             </div>
          </div>
    
          <div class="form-group">
            <label class="col-sm-2 control-label">Condition</label>
            <div class="col-sm-10">
                <input type="text" name="condition" value={{$product->condition}}>         
            </div>
          </div>
    
          <div class="form-group">
            <label class="col-sm-2 control-label">This is a service ?</label>
            <div class="col-sm-10">
              @if($product->inservice)
                <input type="checkbox" value="1"  name="inservice" checked> 
                @else
                <input type="checkbox" value="1"  name="inservice"> 
                @endif       
            </div>
           
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">In Stock ?</label>
            <div class="col-sm-10">
              @if($product->instock)
                <input type="checkbox" value="1"  name="instock" checked> 
                @else      
                <input type="checkbox" value="1"  name="instock"> 
                @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Published ?</label>
            <div class="col-sm-10">
              @if($product->published)
                <input type="checkbox" value="1"  name="published" checked> 
                @else
                <input type="checkbox" value="1"  name="published"> 
                  @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <i class="fas fa-images" width="200"><input type="file" name="image"></i>
            </div>
          </div>
          <div>
            <p><span style="font-weight: bold"> current Image:name  {{$product->avatar}}</p>
         </div>
         <input type="submit" value="UPDATE">
        </form>
      </div>
</form>
</div>
@endsection