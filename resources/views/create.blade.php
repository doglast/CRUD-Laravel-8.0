@extends('templates.template')

@section('content')

    <script src="{{url('assets/bootstrap/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{url('assets/bootstrap/js/jquery.mask.js')}}">
        @push('javascript')
        $('#telefone_cliente').mask("(00)0000-0000");
        @endpush
    </script>
    <div class="container-fluid h-100">
        <div class="row fomr-cadastro justify-content-center p-4">
            <div class="col-md-3 aling-self-center area-form ">

                <span class="small d-block text-center">Cadastre sua conta <b>GalaxyPay</b></span>


                <!--Mensagem de erro caso não siga a validação-->
                @if((isset($errors) && count($errors)>0))
                    <div class="text-center mt-4 mb-2 p-2 alert-danger">
                        @foreach($errors->all() as $erro)
                            {{$erro}}<br>
                        @endforeach
                    </div>
                @endif

                <!--Formulário-->
                <form method="post" action="{{url('cadastro')}}" id="cadastr-form">
                    @csrf
                    <div class="input-group mt-2"></div>
                    <label for="nome_cliente">Nome Completo: <sup class="text-danger"></sup></label>
                    <input type="text" name="nome_cliente" class="form-control bg-light btn-outline-secondary" maxlength="255" autocomplete="off" required>
                    <div class="input-group mt-2"></div>
                    <label for="email_cliente">Email: <sup class="text-danger"></sup></label>
                    <input type="email" name="email_cliente" class="form-control bg-light btn-outline-secondary" maxlength="255"  autocomplete="off" required>
                    <div class="input-group mt-2"></div>
                    <label for="telefone_cliente">Telefone: <sup class="text-danger"></sup></label>
                    <input type="text" name="telefone_cliente" class="form-control bg-light btn-outline-secondary" maxlength="13" placeholder="(00) 0000-0000" autocomplete="off" id="telefone_cliente" required>
                    <div class="input-group mt-2"></div>
                    <label for="senha_cliente">Senha: <sup class="text-danger"></sup></label>
                    <input type="password" name="senha_cliente" class="form-control bg-light btn-outline-secondary" maxlength="255" autocomplete="off" required>
                    <div class="input-group mt-2"></div>
                    <label for="data_nasc_cliente">Data de nascimento: <sup class="text-danger"></sup></label>
                    <input type="date" name="data_nasc_cliente" class="form-control bg-light btn-outline-secondary" required>
                    <button type="submit" name="cadastrar" class="btn btn-success btn-block mt-2">CADASTRAR</button>
                </form>

            </div>
        </div>
    </div>
@endsection
