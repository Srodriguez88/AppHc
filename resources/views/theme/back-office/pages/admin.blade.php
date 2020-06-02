<!DOCTYPE html>
<html lang="en">
  
  <head>
    
    <title>@yield('title') </title>
    @include('theme.back-office.layouts.includes.head')

    

  </head>


  <body>
    
    @include('theme.back-office.layouts.includes.loader')
    @include('theme.back-office.layouts.includes.header')


    {{-- START MAIN --}}
    <div id="main">     
      <div class="wrapper">
        {{-- START LEFT SIDEBAR NAV --}}
        @include('theme.back-office.layouts.includes.left-siderbar')
        {{-- END LEFT SIDEBAR NAV  --}}
       
        {{-- START CONTENT --}}
        <section id="content">          
          <div class="container">
            @yield('contenido')
          </div>         
        </section>
        {{-- END CONTENT --}}      
      </div>      
    </div>
    
    {{-- START FOOTER --}}
    @include('theme.back-office.layouts.includes.footer')
    @include('theme.back-office.layouts.includes.script')
    {{-- END FOOTER --}}
    
  


    

  </body>
</html>