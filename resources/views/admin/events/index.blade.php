@extends('includes.layout')
@section('content')

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="page-wrapper">
		<div class="content container-fluid">
			<div class="page-header">
				<div class="row align-items-center">
					<div class="col">
						<div class="mt-5">
							<h4 class="card-title float-left mt-2">All Events</h4>
							<a href="{{ route('admin.events.create') }}" class="btn btn-primary float-right veiwbutton ">Add Event</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="card card-table">
						<div class="card-body booking_card">
							<div class="table-responsive">
								<table class="datatable table table-stripped table table-hover table-center mb-0">
									<thead>
										<tr>
											<th>Title</th><th>Date</th><th>Time</th><th>Actions</th>
										</tr>
									</thead>
									<tbody>
										@forelse ($data as $event)
                                            <tr>
                                                <td>{{ $event->title }}</td>
                                                <td>{{ $event->date }}</td>
                                                <td>{{ $event->time }}</td>
                                                <td>
                                                    <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                    <form method="POST" action="{{ route('admin.events.destroy', $event->id) }}" style="display:inline-block">
                                                        @csrf @method('DELETE')
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center text-muted">No events found.</td>
                                            </tr>
                                        @endforelse
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
@endsection
