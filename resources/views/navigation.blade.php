<!--  // Main Left Navigation -->
<div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{ url('/') }}">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span><Br />
                       FlightDeck
                    </a>
                </li>
                @if (Auth::check())
                <li class="{{ Request::is('/') ? 'active' : ''}}">
                    <a href="/">Dashboard</a>
                </li>
                <li class="{{ Request::is('airports') ? 'active' : ''}}">
                    {!! link_to_route('airports_path', 'Airports') !!}
                </li>
                <li>
                    <a href="#">Admin</a>
                </li>
                <hr />
                
                    <li>
                        <a href="/auth/logout" class="login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><br />Logout<br />{{ Auth::user()->name }}</a>
                    </li>
               @endif
            </ul>
        </div>