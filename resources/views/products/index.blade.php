<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <h1>Product</h1>
         {{-- THIS IS THE SUCCESS MESSAGE --}}
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        {{-- these are the data in the database --}}
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
               <th>Description</th> 
               <th>Edit</th>
               <th>Delete</th>
            </tr>
            {{-- this is the data from the database access the variable products from controller --}}
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        {{-- now here is the edit,   ['product' => $product] on this one the first is from the parameter product then the next one is from the foreach named product--}}
                        <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                    </td>
                    {{-- THIS IS THE DELETE --}}
                    <td>
                        <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                            @csrf
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>