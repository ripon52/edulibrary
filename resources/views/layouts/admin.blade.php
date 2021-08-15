
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{ asset('logo/favicon-32x32.png') }}" type="image/png" sizes="32x32">
    <title> @yield("title") | EDU Library Management</title>
    <!-- Favicon icon -->
    @include('includes/header-script')
    @yield('css')
    @yield('style')

    <style>
        .content-body .container-fluid, .content-body .container-sm, .content-body .container-md, .content-body .container-lg, .content-body .container-xl{
            padding-top: 2px!important;
        }

        .header-right .header-profile img, .logo-abbr{
            background-color:brown;
        }

       .destroyForm{
            display:inline-block;
        }

       .starColor{
           color:brown;
       }

        .resourceImg{
            height : 120px;
            width : 120px;
            overflow:hidden;
        }
        .resourceImg img{
            height : 100%;
        }

    </style>


</head>
<body>

    <!--*******************
        Preloader start
********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
********************-->

    <!--**********************************
        Main wrapper start
***********************************-->
    <div id="main-wrapper">
        @include('includes/header')
        <!--**********************************
            Sidebar start
***********************************-->
        @include('includes/admin-menu')
        <!--**********************************
            Sidebar end
***********************************-->

		<!--**********************************
            Content body start
***********************************-->



        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<!-- Add Order -->
{{--                <div class="row mt-3 mb-3">--}}
{{--                    <marquee width="100%" direction="left" height="30%">--}}
{{--                        <h6 class="mb-0">পরবর্তী আপডেট হিসেবে পাবেন, মাসের বাজার তালিখা,খাওয়ার হিসাব, মাস অনুযায়ী অটোমেটিক হিসাব পিডিএফ, এক্সেল ফাইল হিসেবে ডাউনলোড করার সুবিধা ।--}}
{{--                            <strong class="text-primary">--}}
{{--                                সাথে আছে Team C.L.H.G. | WhatsApp:+8801829-894659--}}
{{--                            </strong>.--}}
{{--                        </h6>--}}
{{--                    </marquee>--}}
{{--                </div>--}}
                @yield('content')

            </div>
        </div>
        <!--**********************************
            Content body end
***********************************-->

        <!--**********************************
            Footer start
***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">EDU Students</a>
                    {{ Date('Y') }}</p>
            </div>
        </div>
        <!--**********************************
            Footer end
***********************************-->

		<!--**********************************
           Support ticket button start
***********************************-->

        <!--**********************************
           Support ticket button end
***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
***********************************-->
    @include('includes.footer-script')

    @if(session()->has('success'))
        <script>
            $(document).ready(function(){
                toastr.success("{{ session()->get('success') }}", "EDU LIBRARY", {
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    positionClass: "toast-top-right",
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
            });

        </script>
    @endif


    @if(session()->has('warning'))
        <script>
            $(document).ready(function(){
                toastr.success("{{ session()->get('warning') }}", "Smart Life Hack", {
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    positionClass: "toast-bottom-right",
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
            });

        </script>
    @endif



    <script>
        $(function(){

            for (var i=0;i<20;i++){
                var width = $( window ).width()


                if( Number(width)<=700){
                    console.log("Loop ",i,"Current width: " + width);

                    $("#main-wrapper").removeClass("menu-toggle");
                }else{
                    $("#main-wrapper").addClass("menu-toggle")
                }
            }

        });
    </script>



    @yield('js')
    @yield('script')

    <script>
        $(function(){
           $('.table').DataTable();
        });
    </script>
</body>
</html>
