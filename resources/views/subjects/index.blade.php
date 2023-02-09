@extends('subjects.layout')
 
@section('content')
<br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Prathibha Education Center</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('subjects.create') }}"> Add New Subject</a>
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
            <th>Credit</th>
            <th>Hour</th>
        </tr>
        @foreach ($subjects as $subject)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $subject->sname }}</td>
            <td>{{ $subject->code }}</td>
            <td>{{ $subject->credit }}</td>
            <td>{{ $subject->hour }}</td>
            <td>
                <form action="{{ route('subjects.destroy',$subject->subject_id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('subjects.show',$subject->subject_id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('subjects.edit',$subject->subject_id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>    
@endsection