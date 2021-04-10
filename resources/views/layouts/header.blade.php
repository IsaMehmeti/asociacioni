<!-- start: header -->
<header class="header">
    <div class="logo-container">
        <a href="../3.0.0" class="logo">
            <img src="{{asset('img/logo.png')}}" width="204" height="44" alt="Porto Admin" />
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


        <?php $lang = app()->getLocale(); ?>
        <ul class="notifications">

            <li>
                <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                    @if($lang == 'sq')
                        <i class="h-50">SQ</i>
                    @endif
                    @if($lang == 'en')
                        <i class="h-50">EN</i>
                    @endif
                    @if($lang == 'sr')
                        <i class="h-50">SR</i>
                    @endif

                </a>

                <div class="dropdown-menu notification-menu">


                    <div class="content">
                        <ul>
                            <li>
                                <a href="/locale/sr" class="clearfix">
                                    <div class="image">
                                        <i class="h1">SR</i>
                                    </div>
                                    <span class="title">Srbski</span>
                                    <span class="message">Serbian / Serbisht</span>
                                </a>
                            </li>
                            <hr>
                            <li>
                                <a href="/locale/en" class="clearfix">
                                    <div class="image">
                                        <i class="h1">EN</i>
                                    </div>
                                    <span class="title">English</span>
                                    <span class="message">Engleski / Anglisht</span>
                                </a>
                            </li>
                            <hr>
                            <li>
                                <a href="/locale/sq" class="clearfix">
                                    <div class="image">
                                        <i class="h1">SQ</i>
                                    </div>
                                    <span class="title">Shqip</span>
                                    <span class="message">Albanski / Albanian</span>
                                </a>
                            </li>
                        </ul>


                    </div>
                </div>
            </li>
        </ul>






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
