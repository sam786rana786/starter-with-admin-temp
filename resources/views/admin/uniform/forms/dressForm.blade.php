<x-auth-validation-errors class="mb-4" :errors="$errors" />
@if (Route::is('createDress'))
<form action="{{ route('storeDress') }}" method="POST">@csrf
    <div class="row mb-3">
        <label for="days" class="col-sm-2 col-form-label">Add Days</label>
        <div class="col-sm-10">
            <textarea class="form-control elm1" name="days"></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="nur" class="col-sm-2 col-form-label">Add Dress in Nursery to I</label>
        <div class="col-sm-10">
            <textarea class="form-control elm1" name="nur"></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="second" class="col-sm-2 col-form-label">Add Dress in II to VIII</label>
        <div class="col-sm-10">
            <textarea class="form-control elm1" name="second"></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="ninth" class="col-sm-2 col-form-label">Add Dress in IX to XII</label>
        <div class="col-sm-10">
            <textarea class="form-control elm1" name="ninth"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
        Add Dress Data
    </button>
</form>

@else

<form action="{{ route('updateDress', $dress->id) }}" method="POST">@csrf @method('PUT')
    <div class="row mb-3">
        <label for="days" class="col-sm-2 col-form-label">Update Days</label>
        <div class="col-sm-10">
            <textarea class="form-control elm1" name="days">{{ $dress->days }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="nur" class="col-sm-2 col-form-label">Nur to I</label>
        <div class="col-sm-10">
            <textarea class="form-control elm1" name="nur">{{ $dress->nur }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="second" class="col-sm-2 col-form-label">II to VIII</label>
        <div class="col-sm-10">
            <textarea class="form-control elm1" name="second">{{ $dress->second }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="ninth" class="col-sm-2 col-form-label">IX to XII</label>
        <div class="col-sm-10">
            <textarea class="form-control elm1" name="ninth">{{ $dress->ninth }}</textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
        Update Dress Data
    </button>
</form>
@endif
