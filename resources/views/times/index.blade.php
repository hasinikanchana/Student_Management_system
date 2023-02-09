@extends('times.layout')
 
@section('content')
<br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Prathibha Education Center</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('times.create') }}"> Add New Time</a>
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
            <th>Name</th>
            <th>Code</th>
            <th>Start_from</th>
            <th>End_from</th>
        </tr>
        @foreach ($times as $time)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $time->name }}</td>
            <td>{{ $time->code }}</td>
            <td>{{ $time->start_from }}</td>
            <td>{{ $time->end_from }}</td>
            <td>
                <form action="{{ route('times.destroy',$time->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('times.show',$time->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('times.edit',$time->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $times->links() !!}
      
@endsection