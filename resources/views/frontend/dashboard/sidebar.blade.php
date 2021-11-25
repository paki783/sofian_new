<a href="{{ url('dashboard') }}" class="list-group-item @if($active == 'courses') active @endif">
    My Courses
</a>
<a href="{{ url('dashboard/purchase_history') }}" class="list-group-item @if($active == 'purchase_history') active @endif">
    Purchase History
</a>
<a href="{{ url('forum/') }}" class="list-group-item @if($active == 'forum') active @endif">
    Forum
</a>
<a href="{{ url('user/logout') }}" class="list-group-item">
    Logout
</a>