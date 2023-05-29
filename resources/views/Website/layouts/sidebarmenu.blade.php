<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <div class='justify-content-center'>

                    <img class="col-5" style="margin-left: 60px " src="{{ asset('admin/assets') }}/img/employee-management-system-logo.png" alt="">
                </div>
                <li class="menu-title">

                    <span><b style="font-size: 17px">Welcome To Employee Panel</b> </span>

                </li>

                <li >

                    <a href="{{ route('website.user.home') }}"><i class="fas fa fa-home"></i> <span> Home </span> <span
                            class=""></span></a>
                </li>
                <li >

                    <a href="{{ route('website.user.profile') }}"><i class="fas fa fa-user"></i> <span> Profile </span> <span
                            class=""></span></a>
                </li>
                <li >

                    <a href="{{ route('webiste.user.attendance') }}"><i class="fas fa fa-user"></i> <span>MY Attendance </span> <span
                            class=""></span></a>
                </li>


            </ul>
        </div>
    </div>
</div>
