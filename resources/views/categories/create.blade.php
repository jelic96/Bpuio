@extends('layouts.app')

@section('content')

<form method="post" action="/categories">
@csrf

<div class="form-group">
    <input class="form-control" name="category_name" type="text" placeholder="Category name">
</div>


<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection