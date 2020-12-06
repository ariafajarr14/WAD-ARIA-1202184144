@extends('layout/navbar')

@section('title', 'HISTORY')

@section('container')

    @if($order -> isEmpty())
    <div class="text-center">
        <p style="margin-top: 20px; color: gray">There is no data...</p>
        <a type="button" class="btn btn-secondary btn-sm" href="/addproduct">Add Product</a>
    </div>

    @else
    <div class="container" style="margin-bottom: 80px;">
        <div class="text-center" style="margin-bottom: 55px; margin-top: 30px;">
            <h3>History</h3>
        </div>

        <table class="table" style="margin-top: 5px">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Buyer Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>

            <tbody>
                <?php $x = 1 ?>
                @foreach($order as $p)
                <tr>
                    <th scope="row"><?php echo $x;
                                    $x++ ?></th>
                    <td>{{$p->product->name}}</td>
                    <td>{{$p->buyer_name}}</td>
                    <td>{{$p->buyer_contact}}</td>
                    <td>${{$p->amount}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
@endsection