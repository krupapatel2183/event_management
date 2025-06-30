@extends('includes.layout')
@section('content')
    <div class="page-wrapper">
		<div class="content container-fluid">
			<div class="page-header">
				<div class="row align-items-center">
					<div class="col">
						<h3 class="page-title mt-5">Edit Event</h3> </div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					{{-- <form method="post" action="{{ route('store.booking') }}"> --}}
					<div id="successMessage" class="alert alert-success d-none"></div>
					<form id="addEvents">
                        {{ csrf_field() }}
                        @include('admin.events.add_edit_form')
					</form>
				</div>
			</div>
		</div>
	</div>
@push('custom-scripts')
<script type="text/javascript">

	$(function () {

		$('.datetimepicker').datetimepicker({
			format: 'YYYY-MM-DD'
		});
		
		$('.timepicker').datetimepicker({
			format: 'HH:mm:ss',  // 24-hour format
			icons: {
				up: "fa fa-angle-up",
				down: "fa fa-angle-down"
			}
		});

		$('#addEvents').on('submit', function (e) {
			e.preventDefault();

            let eventId = "{{ $event->id }}"
			let formData = $(this).serialize();

			$.ajax({
				url: "{{ route('admin.events.update', ':id') }}".replace(':id', eventId),
				type: "PUT",
				data: formData,
				success: function (response) {
					$('#addEvents')[0].reset();
					$('.error-text').text('');
					$('#successMessage').removeClass('d-none').text('Event Add successful!');
					window.location.href = "{{ route('admin.events') }}"
				},
				error: function (xhr) {
					$('.error-text').text(''); // clear all old errors
					if (xhr.responseJSON && xhr.responseJSON.errors) {
						$.each(xhr.responseJSON.errors, function (key, messages) {
							$('.' + key + '_error').text(messages[0]);
						});
					}
				}
			});
		});
	});
</script>
@endpush
@endsection
