<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div id="wraper">
        <div id="header" class="bg-dark mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4  text-white text-bold py-2">
                        <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" height="26px"
                                alt=""></a>
                    </div>
                    <div class="col-md-8">
                        <a href="{{ url('cart/show') }}" class="py-2 d-block float-right text-danger">Giỏ hàng<span
                                class="text-success">(5)</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->
        <div id="wp-content">
            @yield('content')
        </div>
        <!-- end wp-content -->
        <div id="footer" class="bg-secondary text-center text-warning mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        UNITOP.VN - HỌC ĐỂ DẪN ĐẦU
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
