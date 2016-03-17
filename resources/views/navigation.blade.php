<!--  // Main Left Navigation -->
<div id="sidebar-wrapper" class="fade-in one">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{ url('/') }}">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span> FlightDeck
                    </a>
                </li>
                @if (Auth::check())
                <li class="{{ Request::is('/') ? 'active' : ''}}">
                    <a href="/"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a>
                </li>
                <li class="{{ Request::is('airports') ? 'active' : ''}}">
                    <a href="{{ URL::route('airports_path') }}">
                        <span class="glyphicon glyphicon-road"></span>
                        Airports    
                    </a>
                </li>
                <li class="{{ Request::is('airlines') ? 'active' : ''}}">
                    <a href="{{ URL::route('airlines_path') }}">
                        <span class="glyphicon glyphicon-globe"></span>
                        Airlines    
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-wrench"></span>
                        Admin    
                    </a>
                </li>
                
                </ul>
                <div class="system">
                    <ul class="sidebar-system">
                    <hr />
                        <li>
                            <a href="/auth/logout" class="login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Logout {{ Auth::user()->name }}</a>
                        </li>
                        <hr />
                        <li>
                            <span class="ver">BETA v1.0 {{ App::environment() }}</span>
                        </li>
                    </ul> 
                </div>
               @endif
            </ul>
        </div>