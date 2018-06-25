<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/sys/images/no-image.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Control Panel</li>
            <li class="{{ (Route::currentRouteName()=='system-index')?'active':'' }}">
                <a href="{{ route('system-index' )}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            {{--<li class="{{ (Route::currentRouteName()=='system-ticket')?'active':'' }}">--}}
                {{--<a href="{{ route('system-ticket' )}}"><i class="fa fa-ticket"></i> <span>Ticket</span></a>--}}
            {{--</li>--}}
            <li class="{{ (Route::currentRouteName()=='system-tour')?'active':'' }}">
                <a href="{{ route('system-tour' )}}"><i class="fa fa-car"></i> <span>Tour</span></a>
            </li>
            <li class="{{ (Route::currentRouteName()=='system-tour-request')?'active':'' }}">
                <a href="{{ route('system-tour-request' )}}"><i class="fa fa-comments"></i> <span>Tour request</span></a>
            </li>
            {{--<li class="{{ (Route::currentRouteName()=='system-request')?'active':'' }}">--}}
                {{--<a href="{{ route('system-request' )}}"><i class="fa fa-comment"></i> <span>Request</span></a>--}}
            {{--</li>--}}
        </ul>
    </section>
</aside>
