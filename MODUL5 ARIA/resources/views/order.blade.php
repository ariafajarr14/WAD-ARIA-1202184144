@extends('layout/navbar')

@section('title', 'ORDER')

@section('container')

    @if($product -> isEmpty())
    <div class="text-center">
        <p style="margin-top: 20px;color: gray">There is no data...</p>
        <a type="button" class="btn btn-secondary btn-sm" href="/addproduct">Add Product</a>
    </div>

    @else
    <div class="text-center">
        <h3 style="margin-bottom: 30px; margin-top: 30px;">Order</h3>
    </div>

    @foreach($product as $p)
    <div class="container" style="margin-left: 80px;">
        <div class="card" style="width: 18rem; float: left; height:auto; ">
            <img src="{{'/img_product/'.$p->img_path}}" class="card-img-top" alt="..." width="50px">
            <div class="card-body" >
                <h6 class="card-title">{{$p->name}}</h6>
                <p class="card-text">{{$p->description}}</p>
                <h4 class="card-title">${{$p->price}}</h4>
                <a href="/orderdetail/{{$p->id}}" class="btn btn-success">Order Now</a>
            </div>
        </div>
    </div>
    
    @endforeach
    <br><br><br><br><br><br><br>
    @endif
    
    @endsection
    