@extends('layout.app')
@section('content')
<form action="{{ url('update/'.$user->id) }}" method="POST" >
  @csrf
  @method('put')
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
      </div>
    
      <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="email" class="form-control" name="email"  placeholder="abc@mail.com">
      </div>
    
      <div class="mb-3">
        <label for="" class="form-label">Mobile</label>
        <input type="text" class="form-control" name="mobile">
      </div>

      <div class="d-grid gap-2">
        <button type="submit"  class="btn btn-primary">Button</button>
      </div>
</form>
@endsection