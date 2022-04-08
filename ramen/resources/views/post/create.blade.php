<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.tiny.cloud/1/wpco4cfq5m8m1srfz1q2ksys8z17jeeipl9dwuf0dm1vxj93/tinymce/4/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            height: 300,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {
                    title: 'My Favorites',
                    items: 'code visualaid | searchreplace | emoticons'
                }
            },
            menubar: 'favs file edit view insert format tools table help',
            content_css: 'css/content.css'
        });
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1> Thêm bài viết </h1>
        {{-- # lỗi chung trên đầu --}}
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        {!! Form::open(['url' => 'post/store', 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Tiêu đề']) !!}
            @error('title')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::textarea('content', '', ['class' => 'form-control', 'placeholder' => 'Nội dung bài viết']) !!}
            {{-- <textarea class="form-control" name="content" placeholder="Nội dung bài viết " id="" cols="30" rows="10"></textarea> --}}
            @error('content')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::file('file', ['class' => 'form-control-file']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Thêm mới ', ['name' => 'sm-add', 'class' => 'btn btn-dark']) !!}
            {{-- <input type="submit" name="sm-add"> --}}
        </div>

        {!! Form::close() !!}
    </div>

</body>

</html>
