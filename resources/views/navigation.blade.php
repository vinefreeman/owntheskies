<!--  // Main Left Navigation -->
<div id="sidebar-wrapper" class="fade-in one">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{ url('/') }}">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span> FlightDeck
                    </a>
                    <span class="username">
                         <img src="{{ ! empty(Auth::user()->profile_photo) ? Auth::user()->profile_photo : '/images/no-profile.jpg' }}" alt="{{  Auth::user()->name }}" class="img-circle" />   
                         {{ Auth::user()->name }}
                     </span>
                </li>
                @if (Auth::check())
                <li class="{{ setActive('/') }}">
                     {!! setActiveMenu('/') !!}
                    <a href="/"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a>
                </li>
                <li class="{{ setActive('airports*') }}">
                    {!! setActiveMenu('airports*') !!}
                    <a href="{{ URL::route('airports_path') }}">
                        <span class="glyphicon glyphicon-road"></span>
                        Airports    
                    </a>
                </li>
                <li class="{{ setActive('airlines*') }}">
                 {!! setActiveMenu('airlines*') !!}
                    <a href="{{ URL::route('airlines_path') }}">
                        <span class="glyphicon glyphicon-globe"></span>
                        Airlines    
                    </a>
                </li>
                <li class="{{ setActive('aircraft*') }}">
                 {!! setActiveMenu('aircraft*') !!}
                    <a href="{{ URL::route('aircrafts_path') }}">
                        <span class="glyphicon glyphicon-plane"></span>
                        Aircraft
                    </a>
                </li>
                <li class="{{ setActive('pilots*') }}">
                 {!! setActiveMenu('pilots*') !!}
                    <a href="/pilots">
                        <span class="glyphicon glyphicon-user"></span>
                        Pilot profile
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
                            <a href="/auth/logout" class="login"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Logout</a>
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