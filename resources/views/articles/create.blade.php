@extends('layout')
@section('content')
    <h1>Create</h1>
    <form method="POST" action="/articles">
        @csrf
        <label for="title">title</label>
        <input 
            type="text" 
            name="title" 
            id="title" 
            @error('title') style="border: solid red 1px;" @enderror
            value="{{ old('title') }}">
        @error('title'))
            <p>Error: {{ $errors->first('title') }}</p>
        @enderror
        <br>
        <label for="excerpt">excerpt</label>
        <textarea name="excerpt" id="excerpt" cols="30" rows="10"></textarea><br>
        @error('excerpt'))
            <p>Error: {{ $errors->first('excerpt') }}</p>
        @enderror
        <label for="body">excerpt</label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea><br>
        @error('body'))
            <p>Error: {{ $errors->first('body') }}</p>
        @enderror
        <input type="submit" value="Send">
    </form>
@endsection