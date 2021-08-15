
<!--**********************************
            Nav header start
***********************************-->
<div class="nav-header">
    <a href="{{ route("home") }}" class="brand-logo">
        <img class="logo-abbr" src="{{ asset('template/logo.png') }}" alt="">
{{--        <img class="brand-title" src="{{ asset('logo/clhg.png') }}" alt="">--}}
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Chat box start
***********************************-->

{{--@include('includes.chatbox')--}}

<!--**********************************
    Chat box End
***********************************-->

<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Dashboard
                        <span>Welcome to EDU Library Mang.</span>
                    </div>
                </div>

                <ul class="navbar-nav header-right">

                    @include('includes.gift')

                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                            <img src="{{ asset('template/logo.png') }}" width="20" alt=""/>
                            <div class="header-info">
                                <span class="text-black"><strong>{{ auth()->user()->name}}</strong></span>
                                <p class="fs-12 mb-0" style="background: maroon;color: white;padding:5px; border-radius: 10px;text-align: center">{{ auth()->user()->isAdmin == 1 ? 'Logged in as Admin ' : 'Logged in as Student ' }} </p>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">


                            <a href="#" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ml-2">

                                    Profile Coming soon..</span>
                            </a>
                            <a href="#" class="dropdown-item ai-icon">
                                <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <span class="ml-2">Inbox Coming soon.. </span>
                            </a>

                            @if(session('impersonated_by'))
                                <a href="{{ route('user.leaveImpersonate') }}"  class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ml-2"> Leave Impersonation</span>
                                </a>
                            @else
                                <a href="#" role="button" onclick="document.getElementById('logout').submit()" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>

                                    <span class="ml-2"> Logout </span>
                                    <form action="{{ route('logout') }}" method="post" id="logout">
                                        @csrf
                                    </form>
                                </a>
                            @endif

{{--                            --}}
{{--                            <a href="./page-login.html" class="dropdown-item ai-icon">--}}
{{--                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>--}}
{{--                                <span class="ml-2">Logout </span>--}}
{{--                            </a>--}}

                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->
