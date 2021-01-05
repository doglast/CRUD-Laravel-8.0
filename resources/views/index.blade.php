@extends('templates.template')

@section('content')
    <div class="container-fluid h-100">
        <div class="row fomr-cadastro justify-content-center p-4">
            <div class="col-md-3 aling-self-center area-form ">

                <span class="small d-block text-center">Cadastre sua conta <b>GalaxyPay</b></span>
                    <a href="{{url('cadastro/create')}}">
                        <button name="create" class="btn btn-success btn-block mt-2">CADASTRAR</button>
                    </a>

            </div>
        </div>
    </div>
@endsection
