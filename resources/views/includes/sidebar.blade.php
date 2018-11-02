

<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="#"><img src="{{asset('backend_images/images/icon/logo.png')}}" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li><a href="index.html">ICO dashboard</a></li>
                            <li><a href="index2.html">Ecommerce dashboard</a></li>
                            <li class="active"><a href="index3.html">SEO dashboard</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('admin/jobs') }}" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>JOBS Panel</span></a>

                    </li>
                    <li>
                        <a href="{{ url('admin/sectors') }}" aria-expanded="true"><i class="ti-pie-chart"></i><span>Sectors</span></a>

                    </li>
                    <li>
                        <a href="{{ url('admin/specialization') }}" aria-expanded="true"><i class="ti-palette"></i><span>Specialization</span></a>

                    </li>
                    <li>
                        <a href="{{ url('admin/employees') }}" aria-expanded="true"><i class="ti-slice"></i><span>Employees</span></a>

                    </li>

            </nav>
        </div>
    </div>
</div>

