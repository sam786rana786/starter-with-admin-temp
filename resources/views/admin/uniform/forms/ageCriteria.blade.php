<x-auth-validation-errors class="mb-4" :errors="$errors" />
@if (Route::is('createAgeCriteria'))
<form action="{{ route('storeAgeCriteria') }}" method="POST">@csrf
    <div class="row mb-3">
        <label for="age_criteria" class="col-sm-2 col-form-label">Age Criteria</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="age_criteria" name="age_criteria">
        </div>
    </div>
    <div class="row mb-3">
        <label for="age" class="col-sm-2 col-form-label">Age</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="age" name="age">
        </div>
    </div>
    <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
        Add Age Criteria
    </button>
</form>
@else
<form action="{{ route('updateAgeCriteria', $ageCriteria->id) }}" method="POST">@csrf @method('PUT')
    <div class="row mb-3">
        <label for="age_criteria" class="col-sm-2 col-form-label">Age Criteria</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="age_criteria" name="age_criteria"
                value="{{ $ageCriteria->age_criteria }}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="age" class="col-sm-2 col-form-label">Age</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="age" name="age"
            value="{{ $ageCriteria->age }}">
        </div>
    </div>
    <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
        Update Age Criteria
    </button>
</form>
@endif
