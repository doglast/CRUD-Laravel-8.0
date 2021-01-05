@extends('templates.template')

@section('content')
    <div class="container-fluid h-100">
        <div class="row fomr-cadastro justify-content-center p-4">
            <div class="col-md-3 aling-self-center area-form ">

                @foreach($cliente as $clientes)
                @endforeach
                <span class="small d-block text-center">Edite  os dados da sua conta <b>GalaxyPay</b></span>
                    <a href="{{url('/cadastro/edit/'.$clientes->id_cliente)}}">
                        <button class="btn btn-success btn-block mt-2">EDITAR</button>
                    </a>

            </div>
        </div>
    </div>
@endsection
