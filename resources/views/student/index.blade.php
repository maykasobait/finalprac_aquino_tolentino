@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Students Information') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                        This is the table for the students
                    </div>

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Middle Name</th>
                                        <th>Address</th>
                                        <th>Date of Birth</th>
                                    </tr>
                                </thead>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->fname }}</td>
                                        <td>{{ $student->lname }}</td>
                                        <td>{{ $student->mname }}</td>
                                        <td>{{ $student->add }}</td>
                                        <td>{{ $student->dob }}</td>

    <td> <a href="{{ route('student.edit', $student->id) }}" class="btn btn-success btn-sm">Edit</a>
<form action="{{ route('student.destroy', $student->id) }}" method="POST" class="d-inline">
                                        @csrf

                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this Student?')">
                                            Delete
                                        </button>
                                    </form></td>
        </tr>

                                @endforeach
                                </tbody>


                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div>
 <a href="{{ route('student.create') }}" class="btn btn-success btn-sm">ADD EMPLOYEE</a>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
