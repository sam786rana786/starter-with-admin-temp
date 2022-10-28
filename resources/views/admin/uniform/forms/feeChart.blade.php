<x-auth-validation-errors class="mb-4" :errors="$errors" />
@if (Route::is('createFeeChart'))
<form action="{{ route('storeFeeChart') }}" method="POST">@csrf
    <div class="row mb-3">
        <label for="fee_breakup" class="col-sm-2 col-form-label">Fee Breakup</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control elm1" name="fee_breakup"></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="type" class="col-sm-2 col-form-label">Type</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="type">
        </div>
    </div>
    <div class="row mb-3">
        <label for="applicable" class="col-sm-2 col-form-label">Applicable</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="applicable">
        </div>
    </div>
    <div class="row mb-3">
        <label for="payment_pattern" class="col-sm-2 col-form-label">Payment Pattern</label>
        <div class="col-sm-10">
            <textarea class="form-control elm1" name="payment_pattern"></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="amount" class="col-sm-2 col-form-label">Amount</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control elm1" name="amount"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
        Add Fee Chart
    </button>
</form>
@else
<form action="{{ route('updateFeeChart', $feeChart->id) }}" method="POST">@csrf @method('PUT')
    <div class="row mb-3">
        <label for="fee_breakup" class="col-sm-2 col-form-label">Fee Breakup</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control elm1" name="fee_breakup">{{ $feeChart->fee_breakup }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="type" class="col-sm-2 col-form-label">Type</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="type" value="{{ $feeChart->type }}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="applicable" class="col-sm-2 col-form-label">Applicable</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="applicable" value="{{ $feeChart->applicable }}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="payment_pattern" class="col-sm-2 col-form-label">Payment Pattern</label>
        <div class="col-sm-10">
            <textarea class="form-control elm1" name="payment_pattern">{{ $feeChart->payment_pattern }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="amount" class="col-sm-2 col-form-label">Amount</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control elm1" name="amount">{{ $feeChart->amount }}</textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
        Update Fee Chart
    </button>
</form>
@endif
