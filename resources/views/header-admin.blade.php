@php
    $items = [
        ['label' => 'Unidades', 'url' => '/admin/torre'],
        ['label' => 'Ventas', 'url' => '/admin/ventas'],
        ['label' => 'Actualizar precios', 'url' => '/admin/actualizar-precios'],
        ['label' => 'Registrar Asesor', 'url' => '/admin/register-asesor'],
        ['label' => 'Asesores', 'url' => '/admin/asesors'],
        ['label' => 'Clientes', 'url' => '/admin/clients'],
        ['label' => 'Cotizaciones', 'url' => '/admin/cotizaciones'],
        ['label' => 'Cerrar sesión', 'url' => '/logout'],
    ];
@endphp

@include('shared-utils::components.sidebar', [
    'items' => $items,
    'logo' => 'https://propstudios.mx/img/Propstudios.png'
])
@include('shared-utils::components.navbar')
