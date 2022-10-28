<x-auth-validation-errors class="mb-4" :errors="$errors" />
@if (Route::is('createAdmissionFees'))
    <form action="{{ route('storeAdmissionFees') }}" method="POST">@csrf
        <div class="row mb-3">
            <label for="classes" class="col-sm-2 col-form-label">Classes</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="classes">
            </div>
        </div>
        <div class="row mb-3">
            <label for="amount" class="col-sm-2 col-form-label">Amount</label>
            <div class="col-sm-10">
                <textarea class="form-control elm1" name="amount"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
            Add Admission Fee
        </button>
    </form>
@else
    <form action="{{ route('updateAdmissionFees', $admissionFee->id) }}" method="POST">@csrf @method('PUT')
        <div class="row mb-3">
            <label for="classes" class="col-sm-2 col-form-label">Classes</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="classes" value="{{ $admissionFee->classes }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="amount" class="col-sm-2 col-form-label">Amount</label>
            <div class="col-sm-10">
                <textarea class="form-control elm1" name="amount">{{ $admissionFee->amount }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
            Update Admission Fees
        </button>
    </form>
@endif
