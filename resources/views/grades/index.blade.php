@extends('grades.layout')
 
@section('content')
<br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Prathibha Education Center</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('grades.create') }}"> Add New Grade</a>
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
            <th>Description</th>
        </tr>
        @foreach ($grades as $grade)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $grade->gname }}</td>
            <td>{{ $grade->description }}</td>
            <td>
                <form action="{{ route('grades.destroy',$grade->grade_id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('grades.show',$grade->grade_id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('grades.edit',$grade->grade_id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $grades->links() !!}
      
@endsection