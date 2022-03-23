{{-- @for ( $i = 2; $i <= $n; $i++ )
<p>  Gia tri  cua i hien tai la : {{$i}}
    
@endfor --}}

{{-- @foreach ($users as $user )
    <p> This is user {{$user['name']}}</p>
@endforeach  --}}

@php
    // code php syntax
    foreach($users as $user){
      echo  "This is user ".$user['name'],'<br>';
    }

@endphp
@include('inc.comment', ['title' => 'Comment Bai viet'])