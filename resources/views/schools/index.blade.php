@extends('schools.layout')
 
@section('content')
<br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Prathibha Education Center</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('schools.create') }}"> Add New School</a>
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
            <th>Address</th>
            <th>Mobile</th>
            <th>Fax</th>
        </tr>
        @foreach ($schools as $school)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $school->sname }}</td>
            <td>{{ $school->address }}</td>
            <td>{{ $school->mobile }}</td>
            <td>{{ $school->fax }}</td>
            <td>
                <form action="{{ route('schools.destroy',$school->school_id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('schools.show',$school->school_id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('schools.edit',$school->school_id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $schools->links() !!}
      
@endsection