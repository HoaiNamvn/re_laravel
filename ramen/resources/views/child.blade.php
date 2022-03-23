@extends('layouts.app')
@section('title', 'Tiêu đề trang  con' ) 

@section('content')
<p> nội dung trang con </p>
{{--  định dạng cấu trúc tml  --}}
{{-- bỏ định dang cấu trúc html {{$data}} --}}
<p> Họ và tên : {!!$data!!}</p>

@if ($data % 2 == 0)
<p>{{$data}} Là số chẳn </p>   
@else
<p>{{$data}} Là số Lẻ </p>   

@isset($post_title)
<p> Tiêu đề : {{$post_title}}</p>
@endisset

@empty($users)
<p> Không có user nào </p>
@endempty

@endif
@endsection


@section('sidebar')
@parent
<p> Sidebar trang con</p>
@endsection