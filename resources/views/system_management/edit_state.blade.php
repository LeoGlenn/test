@extends('layouts.app')

@section('content')
<form action="{{ route('state.update', $state->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="Name">Name: <span class="text-danger">*</span></label>
        <input type="text" name="u_name" value="{{ $state->name }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-success float-right">Submit</button>
</form>
@endsection