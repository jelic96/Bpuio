@extends('layouts.app')

@section('content')

<form method="post" action="/categorydriverlicence">
@csrf

<div class="form-group">
    <input class="form-control" name="date_of_pass" type="text" placeholder="Date of pass">
</div>
<div class="form-group">
    <input class="form-control" name="driver_licence_id" type="text" placeholder="Driver licence-ID">
</div>
<div class="form-group">
    <input class="form-control" name="category_id" type="text" placeholder="Category-ID">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection