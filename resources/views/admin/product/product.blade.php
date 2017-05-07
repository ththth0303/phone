@extends("layouts._admin")
@section("title", "Product")
@section('content')
<section class="content-header">
    <h1>
        Product
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Product</li>
    </ol>
</section>
<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
          <a href="{{route('admin.product.insert')}}" class="btn btn-info">ADD</a>


          <!-- <h3 class="box-title">Category</h3> -->

      <!-- <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
    </div> -->
</div>
<!-- /.box-header -->
@if(count($productList) > 0)
<div class="box-body table-responsive no-padding">
    <table class="table table-hover paginate">
        <thead><tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productList as $prod)
        <tr>
            <td>{{$prod->id}}</td>
            <td>{{$prod->name}}</td>
            <td>{{$prod->description}}</td>
            <td>{{$prod->price}}</td>
            <td>{{$prod->image}}</td>
            @foreach($category as $cate)
            @if(($cate->id) == ($prod->category_id))
            <td>
                {{$cate->name}}
            </td>
            @endif
            @endforeach
            <td>
                <!-- tro them bien id de kiem tra edit -->
                <a href="{{route('admin.product.edit',['id' => $prod->id])}}" class="btn btn-success">Edit</a>
                <!-- <form action="{{route('admin.product.remove')}}" method="POST" style="display: inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="{{$prod->id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="submit" class="btn btn-danger" value="Delete">
                </form> -->
                <a href="javascript:;" class="btn btn-danger" id="remove-product-btn" remove-id="{{ $prod->id }}">Remove</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endif
<!-- /.box-body -->
</div>
<center>{{ $productList->links() }}</center>
<!-- /.box -->
</div>
<input type="hidden" value="{{ route('admin.product.remove') }}" id="remove-product-url">
@endsection

@section('page-js')
<script type="text/javascript" src="{{ asset('admin/js/product/index.js' )}}"></script>
<!-- <script type="text/javascript" src="{{ asset('admin/js/product/pagination.js' )}}"></script> -->
@endsection