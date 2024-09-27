<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Layout</div> <i class="icon-menu" title="Layout options"></i></li>


<li class="nav-item ">
    <a  href="{{ route('admin.logout') }}" class="nav-link">
        <span>Admin Paneldən Çıxış </span></a>
</li>

<li class="nav-item ">
    <a href="" class="nav-link">
        <span>Admin Setting</span></a>
</li>
<li class="nav-item ">
    <a href="" class="nav-link">
        <span>Tərcümə Static Sözlər</span></a>
</li>




<li class="nav-item nav-item-submenu">
    <a href="#" class="nav-link"><i class="fa-solid fa-tooth"></i> <span>Products & Category</span></a>

    <ul class="nav nav-group-sub" data-submenu-title="Page layouts">
        <li class="nav-item ">
            <a href="{{route('admin.category.index')}}" class="nav-link">
                <span>Category</span>
            </a>
        </li>

    </ul>
</li>


