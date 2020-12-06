@extends('layout/navbar')

@section('title', 'PRODUCT')

@section('container')

    @if($product -> isEmpty())
    <div class="text-center">
        <p style="margin-top: 20px; color: gray">There is no data...</p>
        <a type="button" class="btn btn-secondary btn-sm" href="/addproduct">Add Product</a>
    </div>

    @else
    <div class="container" style="margin-bottom: 80px;">
        <div class="text-center" style="margin-bottom: 20px; margin-top: 40px;">
            <h3>List Product</h3>
        </div>

        <a href="/addproduct" type="button" class="btn btn-secondary">Add Product</a>
        <table class="table" style="margin-top: 20px">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php $x = 1 ?>
                @foreach($product as $p)
                <tr>
                    <th scope="row"><?php echo $x;
                                    $x++ ?></th>
                    <td>{{$p->name}}</td>
                    <td>${{$p->price}}</td>
                    <td><a type="button" href="/updateproduct/{{$p->id}}" class="btn btn-primary">Edit</a>
                        <a href="deleteproduct/{{$p->id}}" type="button" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
@endsection