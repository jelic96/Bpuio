@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/municipalities/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Municipality name</th>
      <th scope="col">County name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($municipalities as $municipality)
    <tr>
      <td><?= $municipality->id ?></td>
      <td><?= $municipality->municipality_name ?></td>
      <td><?= $municipality->county->county_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection