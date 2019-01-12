@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/driverlicences/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Date of issue</th>
      <th scope="col">Expiration date</th>
      <th scope="col">County name</th>
      <th scope="col">Driver-ID</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($driverlicences as $driverlicence)
    <tr>
      <td><?= $driverlicence->date_of_issue ?></td>
      <td><?= $driverlicence->expiration_date ?></td>
      <td><?= $driverlicence->county->county_name ?></td>
      <td><?= $driverlicence->driver_id ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection