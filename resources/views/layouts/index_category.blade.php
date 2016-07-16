<!--Home -->
<li class="{{ (strpos(Request::path(), '/') === 0) ? 'active' : '' }}">
    <a href="/">
        <span class="menu-text"> Home </span>
    </a>
</li>

<!-- Elasticsearch -->
<li class="{{ (strpos(Request::path(), 'elastic') === 0) ? 'active open' : '' }}">
    <a href="#" class="dropdown-toggle">
        <span class="menu-text"> Elasticsearch </span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li class="{{ (Request::is('elastic') || Request::is('elastic/search')) ? 'active' : '' }}">
            <a href="/elastic">
                <i class="icon-double-angle-right"></i>
                数据列表
            </a>
        </li>
        <li class="{{ Request::is('elastic/add') ? 'active' : '' }}">
            <a href="/elastic/add">
                <i class="icon-double-angle-right"></i>
                添加数据
            </a>
        </li>
    </ul>
</li>
