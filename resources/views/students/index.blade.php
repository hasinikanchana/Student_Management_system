@extends('students.layout')
 
@section('content')
<br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Prathibha Education Center</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Add New Student</a>
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
            <th>Educationdetail</th>
            <th>Personaldetail</th>
            <th>Freesdetail</th>
            <th>Grade</th>
            <th>School</th>
            <th width="280px">Action</th>
        </tr>
        @php
        $i=0;
        @endphp
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->educationdetail }}</td>
            <td>{{ $student->personaldetail }}</td>
            <td>{{ $student->freesdetail }}</td>
            <td>{{ $student->gname }}</td>
            <td>{{ $student->sname }}</td>
            <td>
                <form action="{{ route('students.destroy',$student->student_id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('students.show',$student->student_id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->student_id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>

                    <!-- <a class="btn btn-primary" href="{{ route('schools.index',$student->id) }}">More</a> -->

                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    
@endsection