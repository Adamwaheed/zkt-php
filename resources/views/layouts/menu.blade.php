

<li class="{{ Request::is('/') ? 'active' : '' }}">
    <a href="{{ route('home') }}"><i class="fa fa-home"></i><span>Dashboard</span></a>
</li>

<li class="{{ Request::is('attendances*') ? 'active' : '' }}">
    <a href="{{ route('attendances.index') }}"><i class="fa fa-list"></i><span>Attendances</span></a>
</li>


<li class="{{ Request::is('readers*') ? 'active' : '' }}">
    <a href="{{ route('readers.index') }}"><i class="fa fa-edit"></i><span>Readers</span></a>
</li>

<li class="{{ Request::is('systemLogs*') ? 'active' : '' }}">
    <a href="{{ route('systemLogs.index') }}"><i class="fa fa-edit"></i><span>System Logs</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

