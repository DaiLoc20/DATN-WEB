<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../lib/slick/slick.css" rel="stylesheet">
    <link href="../lib/slick/slick-theme.css" rel="stylesheet">
    <title>App Name  -@yield('title')</title>
</head>
<body>
       @extends('Layouts.app')
       @section('title','Product list')
       @section('header')
            @parent
            &gt; <a href="{{route('products.index');}}">Products</a>
        @endsection

        @section('content')

               <h1>Danh sách sản phẩm</h1>
               <!-- $lst1=Category::all();
                    $lst2=Product::all();
                    Lấy sản phẩm của từng loại sản phẩm theo chỉ định
                -->
            @foreach ($lst2 as $p)
                <p>{{$p->name}}</p>
            @endforeach
        @endsection

        @section('footer')
        @parent
        @endsection



        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../lib/easing/easing.min.js"></script>
        <script src="../lib/slick/slick.min.js"></script>

   <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>
</html>
