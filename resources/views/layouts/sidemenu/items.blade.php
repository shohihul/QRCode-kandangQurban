<li class="nav-item">
    <a href="{{ route('admin.dashboard') }}" @if ($pageSlug == 'dashboard') class="nav-link active" @endif class="nav-link">
        <i class="nav-icon fas fa-fire"></i>
        <p>
        Dashboard
        </p>
    </a>
</li>
<li @if ($pageSlug == 'indexCattleman' or $pageSlug == 'addCattleman') class="nav-item has-treeview menu-open" @endif class="nav-item has-treeview">
    <a href="#" @if ($pageSlug == 'indexCattleman' or $pageSlug == 'addCattleman') class="nav-link active" @endif class="nav-link">
        <i class="nav-icon fas fa-hat-cowboy"></i>
        <p>
        Peternak
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="{{ route('admin-cattleman.index') }}" @if ($pageSlug == 'indexCattleman') class="nav-link active" @endif class="nav-link">
            <i class="fas fa-list nav-icon"></i>
            <p>Index</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{ route('admin-cattleman.create') }}" @if ($pageSlug == 'addCattleman') class="nav-link active" @endif class="nav-link">
            <i class="fas fa-plus nav-icon"></i>
            <p>Buat Akun</p>
        </a>
        </li>
    </ul>
</li>

<li @if ($pageSlug == 'indexLivestock' or $pageSlug == 'addLivestock') class="nav-item has-treeview menu-open" @endif class="nav-item has-treeview">
    <a href="#" @if ($pageSlug == 'indexLivestock' or $pageSlug == 'addLivestock') class="nav-link active" @endif class="nav-link">
        <i class="nav-icon fas fa-paw"></i>
        <p>
        Hewan Ternak
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="{{ route('admin-livestock.index') }}" @if ($pageSlug == 'indexLivestock') class="nav-link active" @endif class="nav-link">
            <i class="fas fa-list nav-icon"></i>
            <p>Index</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{ route('admin-livestock.create') }}" @if ($pageSlug == 'addLivestock') class="nav-link active" @endif class="nav-link">
            <i class="fas fa-plus nav-icon"></i>
            <p>Tambah Hewan Ternak</p>
        </a>
        </li>
    </ul>
    </li>
</li>
