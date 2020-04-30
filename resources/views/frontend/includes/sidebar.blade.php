<div class="list-group">
    @foreach (App\Model\Category::orderBy('cat_name', 'asc')->where('parent_id', NULL)->get() as $parent)
    <a href="#main-{{ $parent->id }}" class="list-group-item list-group-item-action" data-toggle="collapse">
        <img src="{{ asset('backend/images/category/'.$parent->cat_image) }}" width="30" height="30"><span
            class="pl-2">{{ $parent->cat_name }}</span>
    </a>
    <div class="child-rows collapse" id="main-{{ $parent->id }}">
        @foreach (App\Model\Category::orderBy('cat_name', 'asc')->where('parent_id', $parent->id)->get() as $child)
        <a href="#main-{{ $parent->id }}" class="list-group-item list-group-item-action">
            <img src="{{ asset('backend/images/category/'.$child->cat_image) }}" width="25" height="25"><span
                class="pl-2">{{ $child->cat_name }}</span>
        </a>
        @endforeach
    </div>
    @endforeach
</div>

{{-- <ul class="mainmenu">
    @foreach (App\Model\Category::orderBy('cat_name', 'asc')->where('parent_id', NULL)->get() as $parent)
    <li><i class="fas fa-eye icon"></i><span>{{ $parent->cat_name }}<span></li>
    @endforeach
    <li><i class="fas fa-eye icon"></i><span>Menus<span></li>
    <ul class="submenu">
        <div class="expand-triangle"></div>
        <li>
            <a href="{{ route('homepage') }}">
                <span>Home</span>
            </a>
        </li>
        <a href="{{ route('products') }}">
            <li><span>Products</span></li>
        </a>
    </ul>
    <li><i class="fas fa-eye icon"></i><span> Messages</span>
    </li>
    <ul class="submenu">
        <div class="expand-triangle"></div>
        <li><span>New</span></li>
        <li><span>Sent</span></li>
        <li><span>Trash</span></li>
    </ul>
    <li><i class="fas fa-eye icon"></i><span> Settings</span></li>
    <ul class="submenu">
        <div class="expand-triangle"></div>
        <li><span>Language</span></li>
        <li><span>Password</span></li>
        <li><span>Privacy</span></li>
        <li><span>Payments</span></li>
    </ul>
    <li><i class="fas fa-eye icon"></i><span> Logout</span></li>
    </ul> --}}

    {{-- <ul class="mainmenu">
    @foreach (App\Model\Category::orderBy('cat_name', 'asc')->where('parent_id',NULL)->get() as $parent)
    <li class="pl-5 pt-2">{{ $parent->cat_name }}</li>
    @endforeach

    </ul> --}}
