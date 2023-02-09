@extends('days.layout')
 
@section('content')
<br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Prathibha Education Center</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('days.create') }}"> Add New Day</a>
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
        </tr>
        @foreach ($days as $day)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $day->name }}</td>
            <td>{{ $day->code }}</td>
            <td>
                <form action="{{ route('days.destroy',$day->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('days.show',$day->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('days.edit',$day->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $days->links() !!}
      
@endsection