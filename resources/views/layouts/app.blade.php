<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>

    <!-- Main navbar !!-->
    @include('layouts.navbar')
    <!-- /main navbar !-->


    <!-- Page content !-->
    <div class="page-content">

        <!-- Main sidebar !-->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler !-->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Navigation
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler !-->


            <!-- Sidebar content !-->
            @include('layouts.sidebar')
            <!-- /sidebar content !-->

        </div>
        <!-- /main sidebar !-->


        <!-- Main content !-->
        <div class="content-wrapper">

            <!-- Page header !-->
            {{ $header ?? '' }}
            <!-- /page header !-->


            <!-- Content area !-->
            <div class="content">
                {{ $slot ?? '' }}
            </div>
            <!-- /content area !-->


            <!-- Footer !-->
            @include('layouts.footer')
            <!-- /footer !-->

        </div>
        <!-- /main content !-->

    </div>
    <!-- /page content !-->

</body>

</html>
