<!DOCTYPE html>
<html lang="en">
    <head>
    @include('partial.header')

    </head>
    <body>
        <div class="blog-header">
        @include('partial.navbar')
        </div>
 
        <div class="container">
            <div class="row">
                <div class="col-sm-8 blog-main">
                    @yield('content')
                </div>
    
             </div>
          </div>
    </body>
</html>