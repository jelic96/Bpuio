@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/categories/new">New</a>
<table class="table">
  <thead>
    <tr>
    <th scope="col">Category-ID</th>
      <th scope="col">Category name</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($categories as $category)
    <tr>
        <td><?= $category->id ?></td>
      <td><?= $category->category_name ?></td>
      
    </tr>
  @endforeach
  </tbody>
</table>

@endsection