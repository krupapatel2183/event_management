<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="{{ Request::path() == 'events' ? 'active' : '' }}"> <a href="{{ route('admin.events') }}"><i class="fas fa-tachometer-alt"></i> <span>Events</span></a> </li>
				<li class="list-divider"></li>
			</ul>
		</div>
	</div>
</div>