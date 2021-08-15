<div class="deznav">
    @php
        $name = Route::currentRouteName();
    @endphp
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class=" ai-icon" href="{{ $name != 'home' ? route('home') : 'javascript:void()' }} " aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            @if( empty( auth()->user()->isStudent) )
                @include('includes.admin-left-sidebar')
            @else
                @include('includes.student-left-sidebar')
            @endif

            <li>
                <a href="#" role="button" onclick="document.getElementById('logout').submit()"  aria-expanded="false" class="ai-icon">
                    <i class="fa fa-sign-out"></i>
                    <span class="nav-text">Logout</span>
                    <form action="{{ route('logout') }}" method="post" id="logout">
                        @csrf
                    </form>
                </a>
            </li>


        </ul>


        <div class="copyright">
            <p><strong>EDU Library Management V.1 Application</strong> © {{ Date('Y') }} All Rights Reserved</p>
            <p>Made with <i class="fa fa-heart"></i>  by EDU Students</p>
        </div>
    </div>
</div>
