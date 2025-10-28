<!DOCTYPE html>
<html>
<head>
    @include('listing-utils::head')
    @push('styles')
    <style>
        #file-container{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .btn{
            background-color: var(--success-600) !important;
            color: white !important;
        }
    </style>
    @endpush
    @stack('styles')
</head>


<body>
    @include('header-admin')
    <div style="height: 60px"></div>
    <div style="padding: 1.5rem">
    <x-smartForm :form="$form" style="display: flex; flex-direction: column; align-items: center;" />
    
    </div>
    @stack('script-includes')
    @stack('scripts')
</body>
</html>