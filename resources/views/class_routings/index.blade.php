@extends('class_routings.layout')
 
@section('content')
<br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Prathibha Education Center</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('class_routings.create') }}"> Add New Class Routings</a>
            </div>
        </div>
    </div>
    <br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Status</th>
        </tr>
        @foreach ($class_routings as $class_routing)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $class_routing->status }}</td>
            <td>
                <form action="{{ route('class_routings.destroy',$class_routing->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('class_routings.show',$class_routing->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('class_routings.edit',$class_routing->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $class_routings->links() !!}
      
@endsection