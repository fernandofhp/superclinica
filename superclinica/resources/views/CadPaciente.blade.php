@extends('modelo')
@section('corpo')   
<div class="container m-auto col-6">
    <div class="display-6 text-center">CADASTRO DE PACIENTES</div>    
        <form name="formCadPaciente" id="formCadPaciente" method="post" action="{{url('index')}}">
        @csrf
            <div class="input-group p-1 ">
                <input type="text" class="form-control borda" name="nome" 
                placeholder="nome" required="required">
            </div>
            <div class="input-group p-1 ">
                <label for="datanasc" class="form-control rotulo ">Data de Nascimento:</label>
                <input type="date" class="form-control  borda" name="datanasc" 
                placeholder="" required="required">
            </div>
            <div class="input-group p-1">
                <input type="text" class="form-control borda" name="ender" 
                placeholder="Endereço" required="required">
            </div>
            <div class="input-group p-1">
                <input type="text" class="form-control borda" name="fone" 
                placeholder="Telefone" required="required">
            </div>
            <div class="input-group p-1">
                <input type="text" class="borda form-control" name="cpf_card_nro" 
                placeholder="CPF ou N° da Carteirinha" required="required">
            </div>
            <div class="btn-group p-1 w-100">                 
                <button type="submit" class=" btn btn-success borda">
                    <i class="material-icons">save</i>
                    GRAVAR
                </button>
                <button type="reset" class="btn btn-warning borda">    
                    <i class="material-icons">refresh</i>            
                    REDEFINIR                    
                </button>
                <button type="button" class="btn btn-danger borda float-right">    
                    <i class="material-icons">cancel</i>            
                    CANCELAR                    
                </button>
            </div>
        </form>
        <hr>
    </div>
</div>

@endsection