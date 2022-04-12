<div class="header navbar">
    <div class="header-container">
        <ul class="nav-left">
            <li>
                <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
                    <i class="ti-menu"></i>
                </a>
            </li>
        </ul>
        <ul class="nav-right">
            <li class="dropdown">
                <a href="javascript:void(0);" type="button" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" id="dropdownVeganesia">
                    <div class="peer mR-10">
                        <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
                    </div>
                    <div class="peer">
                        <span class="fsz-sm f-asap_med" style="color: #ffffff;">{{ auth()->user()->name }}</span>
                    </div>
                </a>
                <ul style="display: none;" id="menudropdownheader" class="dropdown-menu fsz-sm">
                    <!-- <li>
                        <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-settings mR-10"></i>
                            <span>Setting</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="{{ route('be.staff.edit', ['id' => Auth::id()]) }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-user mR-10"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="email.html" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-email mR-10"></i>
                            <span>Messages</span>
                        </a>
                    </li> -->
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="javascript:void(0)" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700 logout-veg">
                            <i class="ti-power-off mR-10"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>