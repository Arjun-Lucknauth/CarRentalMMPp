
    <!-- Left Sidebar  -->
    <div class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-devider"></li>
                    <li class="nav-label">Home</li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard <span class="label label-rouded label-primary pull-right">2</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{url('/Admin/commerce')}}">Ecommerce </a></li>
                            <li><a href="{{url('/Admin/dashboard')}}">Analytics </a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Apps</li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Email</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="email-compose.html">Compose</a></li>
                            <li><a href="email-read.html">Read</a></li>
                            <li><a href="email-inbox.html">Inbox</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Vehicles</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{url('/Admin/add_vehicle')}}">Add Vehicles</a></li>
                            <li><a href="{{url('/Admin/view_vehicle')}}">View Vehicles</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Categories</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{url('/Admin/add_category')}}">Add Categories</a></li>
                            <li><a href="{{url('/Admin/view_category')}}">View Categories</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </div>
    <!-- End Left Sidebar  -->