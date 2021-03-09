@extends('layout')
@section('content')
    <h1>Edit</h1>
    <form method="POST" action="/articles/{{ $article->id }}">
        @csrf
        @method('PUT')
        <label for="title">title</label>
        <input type="text" name="title" id="title" value="{{ $article->title }}"><br>
        <label for="excerpt">excerpt</label>
        <textarea name="excerpt" id="excerpt" cols="30" rows="10">{{ $article->excerpt }}</textarea><br>
        <label for="body">excerpt</label>
        <textarea name="body" id="body" cols="30" rows="10">{{ $article->body }}</textarea><br>
        <input type="submit" value="Send">
    </form>
@endsection