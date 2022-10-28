<x-auth-validation-errors class="mb-4" :errors="$errors" />
@if (Route::is('uniform.edit'))
<form action="{{ route('uniform.update', $uniform->id) }}" enctype="multipart/form-data" method="POST">@csrf @method('PUT')
    <div class="row mb-3">
        <label for="admission" class="col-sm-2 col-form-label">Admission Text</label>
        <div class="col-sm-10">
            <textarea class="form-control elm1" name="admission">{{ $uniform->admission }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="fee_submission" class="col-sm-2 col-form-label">Fee Submission Text</label>
        <div class="col-sm-10">
            <textarea class="form-control elm1" name="fee_submission">{{ $uniform->fee_submission }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="important_notice" class="col-sm-2 col-form-label">Important Notice Text</label>
        <div class="col-sm-10">
            <textarea class="form-control elm1" name="important_notice">{{ $uniform->important_notice }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="note" class="col-sm-2 col-form-label">Note Text</label>
        <div class="col-sm-10">
            <textarea class="form-control elm1" name="note">{{ $uniform->note }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="year" class="col-sm-2 col-form-label">Year</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="year" name="year"
                value="{{ $uniform->year }}">
        </div>
    </div>
    <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
        Update Uniform Section
    </button>
</form>
@endif
