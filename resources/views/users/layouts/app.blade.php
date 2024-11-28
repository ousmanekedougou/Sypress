<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    @include('users.layouts.head')
    @section('headSection')
    @show
<body class="index-page">
    @include('users.layouts.header')
    
    <main class="main">

       
        

        @section('main-content')
        
        @show
        
        @include('users.layouts.footer')

    </main>
     

    @section('footerSection')
    @show

</body>
</html>