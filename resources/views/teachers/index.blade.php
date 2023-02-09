@extends('teachers.layout')
 
@section('content')
<br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Prathibha Education Center</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('teachers.create') }}"> Add New Teacher</a>
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
            <th>Class</th>
            <th>Education</th>
            <th>Grade</th>
            <th>Subject</th>
        </tr>
        <!-- @php
        $i=0;
        @endphp -->
        @foreach ($teachers as $teacher)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->class }}</td>
            <td>{{ $teacher->education }}</td>
            <td>{{ $teacher->gname }}</td>
            <td>{{ $teacher->sname }}</td>
            <td>
                <form action="{{ route('teachers.destroy',$teacher->teacher_id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('teachers.show',$teacher->teacher_id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('teachers.edit',$teacher->teacher_id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
       
@endsection