@extends('layouts.app')

@section('content')


<a href="{{ route('posts.create') }}">create </a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">body</th>
        <th scope="col">category</th>
        <th scope="col">user</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $item)


      <tr>
        <th scope="row">1</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->body }}</td>
        <td>{{ $item->user->name }}</td>
        <td>{{ $item->category->name }}</td>
        <td>
            <a href="{{ route('posts.show', $item->id) }}" >show</a>
            <a href="{{ route('posts.edit', $item->id) }}" >edit</a>

            <a href="javascript:void(0)"  class="btn btn-danger btn-sm"  onclick="if(confirm('are u sure')){ document.getElement('delete-{{ $item->id }}').submit() ;} else {return false;}">delete</a></td>
    <form action="{{ route('posts.destroy', $item->id) }}"  metlhod='post' id="delete-{{ $item->id}}" style="display: none">
        @csrf
        @method('delete')
    </form>

        </tr>
         @endforeach
         {{ $posts->links() }}
    </tbody>
  </table>
@endsection
