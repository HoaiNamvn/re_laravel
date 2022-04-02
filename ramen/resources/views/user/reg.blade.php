<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1> Đăng ký </h1>
        {!! Form::open(['url' => 'user/store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('username', 'Tên đăng nhập ') !!}
            {!! Form::text('username', '', ['class' => 'form-control', 'placeholder' => '']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Mật khẩu') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Email', 'Email') !!}
            {!! Form::email('email', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('city', 'Thành phố ') !!}
            {!! Form::select('city', [0 => 'Chọn', 1 => 'Hà Nội', 2 => 'TP.HCM', 3 => 'Đà Nẵng'], 0, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('gender', 'Giới tính') !!}
            <div class="form-check">
                {!! Form::radio('gender', 'male', '', ['class' => 'form-check-input', 'id' => 'male']) !!}
                {!! Form::label('male', 'Nam', ['class' => 'form-check-label']) !!}
            </div>
            <div class="form-check">
                {!! Form::radio('gender', 'female', '', ['class' => 'form-check-input', 'id' => 'female']) !!}
                {!! Form::label('female', 'Nữ', ['class' => 'form-check-label']) !!}
            </div>

        </div>
        <div class="form-group">
            {!! Form::label('skills', 'Kĩ Năng', []) !!}
            <div class="form-check">
                {!! Form::checkbox('skills', 'Html', '', ['class' => 'form-check-input', 'id'=>'html']) !!}
                {!! Form::label('html', 'Html', ['class'=>'form-check-label']) !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('skills', 'css', '', ['class' => 'form-check-input', 'id'=>'css']) !!}
                {!! Form::label('css', 'Css', ['class'=>'form-check-label']) !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('skills', 'php', '', ['class' => 'form-check-input', 'id'=>'php']) !!}
                {!! Form::label('php', 'PHP', ['class'=>'form-check-label']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('birth', 'Ngày sinh', []) !!}
            {!! Form::date('birth', '', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('birth', 'Giới thiệu bản thân', []) !!}
            {!! Form::textarea('intro', '', ['class'=>'form-control','id'=>'birth']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Đăng ký ', ['name' => 'sm-reg', 'class' => 'btn btn-dark']) !!}
            {{-- <input type="submit" name="sm-add"> --}}
        </div>
        {!! Form::close() !!}
    </div>

</body>

</html>
