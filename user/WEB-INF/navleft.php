            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
<?php

$page = isset($page) ? $page:"";
print'
                    <li class="'. ($page == 'index'? "active":"" ) .' ">
                        <a href="index"><i class="fa fa-fw fa-dashboard"></i> Manage</a>
                    </li>
';

?>   
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>