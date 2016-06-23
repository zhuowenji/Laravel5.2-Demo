<!--Dashboard -->
<li class="{{ (strpos(Request::path(), 'admin') === 0) ? 'active' : '' }}">
    <a href="/admin">
        <i class="icon-dashboard"></i>
        <span class="menu-text"> Dashboard </span>
    </a>
</li>
