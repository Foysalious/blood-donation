
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.includes.header')
    @include('backend.includes.css')

    <!-- vendor css -->
    
  </head>

  <body>
        @include('backend.includes.menu')
        @include('backend.includes.topbar')
        @include('backend.includes.message')


    <!-- ########## START: HEAD PANEL ########## -->


    <!-- ########## START: RIGHT PANEL ########## -->
    
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
   
      @yield('dashboard-content')
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

   @include('backend.includes.script')
  </body>
</html>
