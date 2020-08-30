@extends('modelo')
@section('corpo')   
<div class="container m-auto col-6">
    <div class="display-6 text-center">CADASTRO DE PACIENTES</div>    
        <form name="formCadPaciente" id="formCadPaciente" method="post" action="{{url('pacientes')}}">
        <input type="text" name="id_usuario" id="id_usr" value="{{ $id_usuario ?? -1 }}">
        @csrf
            <div class="input-group p-1 ">
                <input type="text" class="form-control borda" name="nome" value="JOSE MEDINA" 
                placeholder="nome" required="required">
            </div>
            <div class="input-group p-1 ">
                <label for="datanasc" class="form-control rotulo ">Data de Nascimento:</label>
                <?php 
                    $data = date('Y-m-d', time());
                ?>
                <input type="date" class="form-control  borda" name="datanasc"
                placeholder="" required="required" value="{{ $data }}">
            </div>
            <div class="input-group p-1">
                <input type="text" class="form-control borda" name="ender" value="RUA ALTA CALABRIDADE"
                placeholder="Endereço" required="required">
            </div>
            <div class="input-group p-1">
                <input type="text" class="form-control borda" name="fone" value="(16) 98844-5567"
                placeholder="Telefone" required="required">
            </div>
            <div class="input-group p-1">
                <input type="text" class="borda form-control" name="cpf_card_nro" value="924.922.451-08"
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
                <button type="button"  onclick="window.history.back()" class="btn btn-danger borda float-right">    
                    <i class="material-icons">cancel</i>            
                    CANCELAR                    
                </button>
            </div>
        </form>
        <hr>
    </div>
</div>

@endsection