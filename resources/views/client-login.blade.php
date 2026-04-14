<x-layout>
    <style>
            #form-field-category{
                width: 100% !important;
            }
            #RegisterClient{
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
            #SelectClient{
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
            .title{
                text-align: center;
                font-size: 2rem;
                margin-bottom: 2rem !important;
            }
            iconify-icon {
                font-size: 1rem;
            }

            .btn{
                background-color: #B07E50;
                color: #ffffff;
            }

            .login-card{
                background-color: #F5F5F5;
            }
            
        </style>
    @include(config('overrides.views.header-asesor'))
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 2rem;">
        <div class="card login-card" style="padding:1.5rem;">
            <div style="display: flex; justify-content: center; width: 100%; margin-bottom: 2rem;">
                <img src="https://propstudios.mx/img/Propstudios.png" id="logo" style="margin-bottom:1.5rem; width: 12rem">
            </div>
            
            <p class="title">Registrar Cliente</p>
            <x-form :form="$form_register" style="display: flex; flex-direction: column; align-items: center; gap: 6px;" />
            <div style="height: 36px"></div>
            <p class="title">Seleccionar Cliente</p>
            <div style="height: 12px"></div>
            <x-form :form="$form_select" style="display: flex; flex-direction: column; align-items: center; gap: 6px;" />
        </div>
    </div>
</x-layout>