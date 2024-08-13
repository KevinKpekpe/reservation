@extends('admin.base')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1>Hotel Settings</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.settings.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="check_in_time">Check-in Time</label>
                            <input type="time" class="form-control" id="check_in_time" name="check_in_time" value="{{ old('check_in_time', $settings->check_in_time) }}">
                        </div>

                        <div class="form-group">
                            <label for="check_out_time">Check-out Time</label>
                            <input type="time" class="form-control" id="check_out_time" name="check_out_time" value="{{ old('check_out_time', $settings->check_out_time) }}">
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="breakfast_included" name="breakfast_included" value="1" {{ old('breakfast_included', $settings->breakfast_included) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="breakfast_included">Breakfast Included</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="free_wifi" name="free_wifi" value="1" {{ old('free_wifi', $settings->free_wifi) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="free_wifi">Free Wi-Fi</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cancellation_policy_hours">Cancellation Policy (hours)</label>
                            <input type="number" class="form-control" id="cancellation_policy_hours" name="cancellation_policy_hours" value="{{ old('cancellation_policy_hours', $settings->cancellation_policy_hours) }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Save Settings</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
