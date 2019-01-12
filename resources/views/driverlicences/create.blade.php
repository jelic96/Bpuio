@extends('layouts.app')

@section('content')

<form method="post" action="/driverlicences">
@csrf

<div class="form-group">
    <input class="form-control" name="date_of_issue" type="text" placeholder="Date of issue">
</div>
<div class="form-group">
    <input class="form-control" name="expiration_date" type="text" placeholder="Expiration date">
</div>
<div class="form-group">
    <select class="form-control" name="county_id">
        @foreach($counties as $county)
        <option value="{{ $county->id }}">{{ $county->county_name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <input class="form-control" name="driver_id" type="text" placeholder="Driver-ID">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection