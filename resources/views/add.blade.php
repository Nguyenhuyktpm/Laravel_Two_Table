@extends('layout.app')
@section('content')
<div class="container">
  <form action= "{{url('add')}}" method="POST">
    <div class="mb-3 row">
      @csrf
    <div >
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" name="name">
        </div>
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Email</label>
      <input type="email" class="form-control" name="email"  placeholder="abc@mail.com">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Password</label>
      <input type="password" class="form-control" name="pass">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Mobile</label>
      <input type="text" class="form-control" name="mobile">
    </div>

    <button type="submit" class="btn btn-primary">Button</button>
    </div>
  </form>
</div>
@endsection