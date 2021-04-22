<!-- start: header -->
<header class="header">
    <div class="logo-container">
        <a href="../3.0.0" class="logo">
            <img src="{{asset('img/logo.png')}}" width="204" height="44" alt="Porto Admin"/>
        </a>
        <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
             data-fire-event="sidebar-left-opened">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <!-- start: search & user box -->
    <div class="header-right">

        <span class="separator"></span>
        <?php $lang = app()->getLocale(); ?>
        <ul class="notifications">
            <li>
                <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="badge">{{$events->count()}}</span>
                </a>
                <div class="dropdown-menu notification-menu" style="">
                    <div class="notification-title">
                        <span class="float-right badge badge-default">{{$events->count()}}</span>
                        {{__('messages.Future Events')}}
                    </div>
                    <div class="content">
                        <ul>
                            @foreach($events->take(5) as $event)
                                <li>
                                    <a href="{{url('/calendar')}}" class="clearfix">
                                        <?php
                                        $orgDate = $event->start;
                                        $start = date("d-m-Y", strtotime($orgDate));?>
                                        <span class="title">{{$event->title}}</span>
                                        <span class="message">{{$start}}</span>
                                    </a>
                                    <hr>
                                </li>
                            @endforeach
                        </ul>


                        <div class="text-right">
                            @if($events->count() > 0)
                            <a href="{{url('/calendar')}}" class="view-more">{{__('messages.View All')}}</a>
                            @else
                            <a href="{{url('/calendar')}}" class="view-more">{{__('messages.Add Event')}}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </li>
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
                                <a href="/locale/sq" class="clearfix">
                                    <div class="image">
                                        <i class="h1">SQ</i>
                                    </div>
                                    <span class="title">Shqip</span>
                                    <span class="message">Albanski / Albanian</span>
                                </a>
                            </li>
                            <hr>
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

                        </ul>


                    </div>
                </div>
            </li>
        </ul>

        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown" aria-expanded="false">
                <figure class="profile-picture">
                    <img src="img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle"
                         data-lock-picture="img/!logged-user.jpg">
                </figure>
                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                    <span class="name">{{auth()->user()->name}}</span>
                    <span class="role">Admin</span>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu" style="">
                <ul class="list-unstyled mb-2">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="{{route('user.index')}}"><i
                                class="fas fa-user"></i> {{__('messages.My Profile')}}</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="/logout"><i
                                class="fas fa-power-off"></i>{{__('messages.Logout')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- end: header -->
