@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/categorydriverlicence/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Date of pass</th>
      <th scope="col">Driver licence-ID</th>
      <th scope="col">Category name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($categorydriverlicence as $categorydriverlicence)
    <tr>
      <td><?= $categorydriverlicence->date_of_pass ?></td>
      <td><?= $categorydriverlicence->driver_licence_id ?></td>
      <td><?= $categorydriverlicence->category->category_id ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection