<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tiny.cloud/1/wpco4cfq5m8m1srfz1q2ksys8z17jeeipl9dwuf0dm1vxj93/tinymce/4/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: 'textarea'
      });
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>
    <h1> Trang danh sách bai viết </h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="">{{ $post->title }}</a> <br>
                <p>{!! $post->content !!}</p>
                {{-- <img src="{{url($post->thumbnail)}}" alt=""> --}}
            </li>
        @endforeach
    </ul>
    {{ $posts->appends(['sort' => 'votes'])->links() }}
</body>

</html>
