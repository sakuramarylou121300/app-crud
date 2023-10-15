<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create Product</title>
    </head>
    <body>
        <h1>Create a Product</h1>
        <form method="post" action="{{route('product.store')}}">
                @csrf
                @method('post')
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter Name">
                </div>
                <div>
                    <label for="qty">Quantity</label>
                    <input type="text" name="qty" placeholder="Enter Quantity">
                </div>
                <div>
                    <label for="price">Price</label>
                    <input type="text" name="price" placeholder="Enter Price">
                </div>
                <div>
                    <label for="description">Description</label>
                    <input type="text" name="description" placeholder="Enter Description">    
                </div>
                <div>
                    <input type="submit" value="Save the New Product">
                </div>
        </form>
    </body>
</html>