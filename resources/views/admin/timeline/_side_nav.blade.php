<ul class="nav nav-pills nav-stacked">
    <li class="{{ Request::is('*timeline') ? 'active' : '' }}"><a href="{{ route('admin.timeline.index') }}">List</a></li>
    <li class="hide {{ Request::is('*create') ? 'active' : '' }}"><a href="{{ route('admin.timeline.create') }}">Create</a></li>
</ul>
