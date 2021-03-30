<!-- start: header -->
<header class="header">
    <div class="logo-container">
        <a href="../3.0.0" class="logo">
            <img src="img/logo.png" width="75" height="35" alt="Porto Admin" />
        </a>
        <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <!-- start: search & user box -->
    <div class="header-right">

        <form action="pages-search-results.html" class="search nav-form">
            <div class="input-group">
                <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                <span class="input-group-append">
								<button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
							</span>
            </div>
        </form>

        <span class="separator"></span>

        <div class="userbox">
            <a href="#" data-toggle="dropdown" aria-expanded="false">

                <div class="profile-info" >
                    <span class="name">{{auth()->user()->name}}</span>
                    <span class="role">Administrator</span>
                </div>
                <i class="fa custom-caret"></i>

            </a>

            <div class="dropdown-menu" style="">
                <ul class="list-unstyled mb-2">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fas fa-user"></i> My Profile</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="/logout"><i class="fas fa-power-off"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    <!-- end: search & user box -->
</header>
<!-- end: header -->
