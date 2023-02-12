@extends('layouts.app')
@include('pasrtial.flashmessage')
@section('content')

<form  action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="exampleFormControlTextarea1">title</label>
        <input class="form-control" id="exampleFormControlTextarea1" name="title" type="text" value="{{  $post->title}}">
        @error('title')
            <span class="text-danger"> {{ $message }}</span>
        @enderror
      </div>


      <div class="form-group">
        <label for="exampleFormControlTextarea1"> body</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"> {{  $post->title}}"</textarea>
        @error('body')
        <span class="text-danger"> {{ $message }}</span>
    @enderror
      </div>



    <div class="form-group">
      <label for="exampleFormControlSelect1"> category</label>
      <select class="form-control" id="exampleFormControlSelect1" name="category_id">
        <option value="{{  $post->category_id}}">{{  $post->category->name}}}</option>
        @foreach ($categories as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach


      </select>
      @error('category_id')
      <span class="text-danger"> {{ $message }}</span>
  @enderror
    </div>



    <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
