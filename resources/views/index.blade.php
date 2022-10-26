@extends('layout.app')
@section('content')

  <div class="table-responsive">
    <table  class="table table-primary " >
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
           
            @foreach ($user as $item)
            <tr>
                <td scope="row">{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->mobile->mobile}}</td>
                <td>
                    <a href="{{url('edit/'.$item->id)}} "  class="btn btn-primary">Edit</a>
                </td> 
              
                <td>
                    <form method = "POST" action="{{url('delete/'.$item->id)}}">
                        @csrf
                        @method('delete')
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                </form>
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>

@endsection

