@extends ('layouts.app')

@section('content')

<div class = "d-flex justify-content-betweeb aligh-items-centermb-3">
    <h2> Student List</h2>

    <a href ="{{route('students.create')}}"  class="btn btn-primary">
        Add Student
    </a>

</div>

<div class = "card">
    <div class ="card-body">

        <table class ="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Student Number</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($students as $student)

                    <tr>
                        <td> {{ $student->student_number}}</td>
                        <td> {{ $student->first_name}} {{$student->last_name}}</td>
                        <td> {{ $student->student_email}}</td>
                        <td> {{ $student->student_course}}</td>

                    <td>
                        <a href="{{ route('students.show',$student)}}"
                            class ="btn btn-info btn-sm">
                            View
                        </a>
                        
                            <a href="{{ route('students.show',$student)}}"
                            class ="btn btn-info btn-sm">
                            View
                        </a>



