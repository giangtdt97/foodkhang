@extends('layouts.master')
@section('title', 'Tag Detail')
@section('content')
    @foreach($tag->blogs ?? '' as $blog)
        {{$blog->title}}
    @endforeach
@endsection
