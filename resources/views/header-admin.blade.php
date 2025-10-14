@php
    $items = [
        ['label' => 'torre', 'url' => '/admin/torre'],
        ['label' => 'ventas', 'url' => '/admin/ventas'],
        ['label' => 'Registrar Asesor', 'url' => '/admin/register-asesor'],
        ['label' => 'Asesores', 'url' => '/admin/asesors'],
        ['label' => 'Clientes', 'url' => '/admin/clients'],
        ['label' => 'Cotizaciones', 'url' => '/admin/cotizaciones'],
        ['label' => 'Logout', 'url' => '/logout'],
    ];
@endphp

@include('shared-utils::components.sidebar', [
    'items' => $items,
    'logo' => 'https://propstudios.mx/img/Propstudios.png'
])
@include('shared-utils::components.navbar')
