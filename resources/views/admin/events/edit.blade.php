@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Update Event
                            </h4>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form action="{{ route('events.update', $event->id) }}" enctype="multipart/form-data"
                                method="POST">@csrf @method('PUT')
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $event->name }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ $event->title }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="event_date" class="col-sm-2 col-form-label">Event Date</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="datetime-local" value="{{ $event->event_date }}"
                                            id="example-datetime-local-input" name="event_date">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="link" name="link"
                                            value="{{ $event->link }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" id="description" name="description">{{ $event->description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="cover_image" class="col-sm-2 col-form-label">Event Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image" name="cover_image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage"
                                            src="{{ !empty($event->cover_image) ? url($event->cover_image) : url('backend/images/small/img-2.jpg') }}"
                                            alt="Image Profile" class="rounded avatar-lg">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">
                                    Update Event
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
