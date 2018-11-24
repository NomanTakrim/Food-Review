<ul class="nav navbar-nav navbar-right">
    <li><a href="#"><span class="glyphicon glyphicon-user"></span>{{session()->get('user')}}</a></li>
    <li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
</ul>