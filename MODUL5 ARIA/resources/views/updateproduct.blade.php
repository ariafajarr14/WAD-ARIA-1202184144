@extends('layout/navbar')

@section('title', 'UPDATE PRODUCT')

@section('container')

    <div class="container" style="margin-bottom: 80px;">

        <h3 class="text-center" style="margin: 50px">Update Product</h3>

        <form style="margin: 20px" role="form" method="post" enctype="multipart/form-data" action="/updateproducts/{{$product->id}}">

            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$product->name}}">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <div class="input-group-prepend">
                    <div class="input-group-text">$ USD</div>
                    <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}">
                </div>
            </div>

            <div class="form-group">
                <label for="Description">Description</label>
                <textarea class="form-control" id="Description" name="Description" rows="3">{{$product->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" style="width: 300px" value="{{$product->stock}}">
            </div>

            <div class="form-group">
                <label for="img">Image file input</label>
                <input type="file" class="form-control-file" id="img" name="img" value="{{$product->img_path}}">
            </div>

            <button type="submit" class="btn btn-dark">Submit</button>

        </form>

    </div>
@endsection