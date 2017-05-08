@extends("layouts._admin")
@section('title', 'Insert Product')
@section('content')
<div class="form">
  <form action="{{route('admin.product.store')}}" method="POST" role="form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <legend>Insert Product</legend>
    
    <div class="form-group">
      <input type="hidden" name="id" value="{{$product->id}}">
    </div>
    <div class="form-group">
      <label for="insert_name">Name</label>
      <input type="text" class="form-control" name="name" value="{{$product->name}}">
    </div>
    <div class="form-group">
      <label for="insert_des">Description</label>
      <input type="text" class="form-control" name="description" value="{{$product->description}}">
    </div>
    <div class="form-group">
      <label for="insert_price">Price</label>
      <input type="number" class="form-control" name="price" value="{{$product->price}}">
    </div>
    <div class="form-group">
      <label for="insert_image">Image</label>
      <input type="file" class="form-control" name="image" value="{{$product->image}}">
    </div>
    <div class="form-group">
      <select name="category_id" value="{{$product->category_id}}">
        @foreach($category as $element)
          @if($element->id == $product->category_id)
            <option value="{{$element->id}}" selected>{{$element->name}}</option>
          @else
            <option value="{{$element->id}}">{{$element->name}}</option>
          @endif        
        @endforeach
      </select>
      </div>

    

    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
@endsection
