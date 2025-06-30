<div class="row formtype">
    <div class="col-md-4">
        <div class="form-group">
            <label>Title</label>
            <input type="title" placeholder="Title" class="form-box input-box form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" value="{{ old('title', $event->title ?? '') }}">
            <span class="text-danger error-text title_error"></span>
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label>Description</label>
            <textarea placeholder="Description" class="form-box input-box form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description">{{ old('description', $event->description ?? '') }}</textarea>
            <span class="text-danger error-text description_error"></span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Date</label>
            <div class="cal-icon">
                <input type="text" class="form-box input-box form-control datetimepicker {{ $errors->has('date') ? 'is-invalid' : '' }}" name="date" value="{{ old('date', $event->date ?? '') }}">
                <span class="text-danger error-text date_error"></span>
            </div>
        </div>
    </div>
    <div class="col-md-4 booking-time">
        <div class="form-group">
            <label>Time</label>
            <div class="cal-icon">
                <input type="text" name="time" class="form-box input-box form-control timepicker {{ $errors->has('time') ? 'is-invalid' : '' }}" value="{{ old('time', $event->time ?? '') }}">
                <span class="text-danger error-text time_error"></span>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Location</label>
            <input type="location" placeholder="Location" class="form-box input-box form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" name="location" value="{{ old('location', $event->location ?? '') }}">
            <span class="text-danger error-text location_error"></span>
        </div>
    </div>

</div>
<button type="submit" class="btn btn-primary">Save</button>
<a href="{{ route('admin.events') }}" type="button" class="btn btn-danger">Cancel</a>