<!DOCTYPE html>
<html>
<head>
    @include('listing-utils::head')
    @stack('styles')
</head>


<body>
    @include('header-admin')
    <div style="height: 60px"></div>
    
    @stack('script-includes')
    @stack('scripts')
</body>
</html>