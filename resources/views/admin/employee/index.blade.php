@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <h4>Teaching Staff</h4>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="{{ route('employee.create') }}" class="btn btn-sm btn-info me-md-2"> <i
                                                class="fas fa-plus"></i> Add
                                            Staff</a>
                                        <a href="{{ route('upload') }}" class="btn btn-sm btn-info"> <i
                                                class="fas fa-plus"></i> Upload XLS</a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name</th>
                                        <th>Desgination</th>
                                        <th>Subject</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = '1';
                                    @endphp
                                    @foreach ($employees as $key => $employee)
                                        @if ($employee->is_teacher == 1)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $employee->name }}</td>
                                                <td>{{ $employee->designation }}</td>
                                                <td>{{ $employee->subject }}</td>
                                                <td colspan="2">
                                                    <a href="{{ route('employee.edit', $employee->id) }}"
                                                        class="btn btn-primary"><i class="fas fa-pencil-alt"></i>
                                                        Edit</a>
                                                    <button type="button" class="btn btn-danger deleteEmployee"
                                                        data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                        value="{{ $employee->id }}"><i
                                                            class="fas fa-trash-alt"></i>Delete</button>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <h4>Non Teaching Staff</h4>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="{{ route('employee.create') }}" class="btn btn-sm btn-info me-md-2"> <i
                                                class="fas fa-plus"></i> Add
                                            Staff</a>
                                        <a href="{{ route('upload') }}" class="btn btn-sm btn-info"> <i
                                                class="fas fa-plus"></i> Upload XLS</a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serial = '1';
                                    @endphp
                                    @foreach ($employees as $key => $employee)
                                        @if ($employee->is_teacher == 0)
                                            <tr>
                                                <td>{{ $serial++ }}</td>
                                                <td>{{ $employee->name }}</td>
                                                <td>{{ $employee->designation }}</td>
                                                <td>
                                                    <a href="{{ route('employee.edit', $employee->id) }}"
                                                        class="btn btn-primary"><i class="fas fa-pencil-alt"></i>
                                                        Edit</a>
                                                    <button type="button" class="btn btn-danger deleteEmployee"
                                                        data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                        value="{{ $employee->id }}"><i
                                                            class="fas fa-trash-alt"></i>Delete</button>

                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="POST" id="myForm">@csrf @method('DELETE')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>Are You sure you want to delete this employee?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Yes Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.deleteEmployee').click(function(e) {
                e.preventDefault();
                var employee_id = $(this).val();
                var action = "{{ url('/employee/') }}" + '/' + employee_id;
                $('#myForm').attr('action', action);
                $('#deleteModal').modal('show');
            });
        });
    </script>
@endsection
