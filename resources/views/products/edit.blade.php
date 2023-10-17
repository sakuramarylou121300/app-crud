<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Update Product</title>
    </head>
    <body>
        <h1>Edit a Product</h1>
        {{-- this is to show error --}}
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$errors}}</li>
            @endforeach
        </ul>
            
        @enderror
        <form method="post" action="{{route('product.update', ['product' => $product])}}">
                @csrf
                @method('put')
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter Name" value="{{$product->name}}">
                </div>
                <div>
                    <label for="qty">Quantity</label>
                    <input type="text" name="qty" placeholder="Enter Quantity"  value="{{$product->qty}}">
                </div>
                <div>
                    <label for="price">Price</label>
                    <input type="text" name="price" placeholder="Enter Price" value="{{$product->price}}">
                </div>
                <div>
                    <label for="description">Description</label>
                    <input type="text" name="description" placeholder="Enter Description" value="{{$product->description}}">    
                </div>
                <div>
                    <input type="submit" value="Update  Product">
                </div>
        </form>
    </body>
</html>