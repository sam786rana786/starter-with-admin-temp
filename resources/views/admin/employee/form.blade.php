<x-auth-validation-errors class="mb-4" :errors="$errors" />
@if (route('employee.create'))
    <form action="{{ route('employee.store') }}" method="POST">@csrf
    @else
        <form action="{{ route('employee.update', $employee->id) }}" method="POST">@csrf @method('PUT')
@endif
<div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name"
            value="{{ isset($employee->name) ? $employee->name : '' }}">
    </div>
</div>
<div class="row mb-3">
    <label for="designation" class="col-sm-2 col-form-label">Designation</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="designation" name="designation"
            value="{{ isset($employee->designation) ? $employee->designation : '' }}">
    </div>
</div>
<div class="row mb-3">
    <label for="subject" class="col-sm-2 col-form-label">Subject</label>
    <div class="col-sm-10">
        <input class="form-control" type="text" name="subject" placeholder="If No Subject Leave Blank"
            value="{{ isset($employee->subject) ? $employee->subject : '' }}">
    </div>
</div>
<div class="row mb-3">
    <label for="link" class="col-sm-2 col-form-label">Teaching / Non-Teaching</label>
    <div class="col-sm-10">
        <select name="is_teacher" class="form-select">
            <option value="1" selected="">Teaching Staff
            </option>
            <option value="0" selected="">Non Teaching Staff
            </option>
        </select>
    </div>
</div>
<button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
    Submit
</button>
</form>
