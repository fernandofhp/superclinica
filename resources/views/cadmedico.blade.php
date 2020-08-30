@extends('modelo')
@section('corpo')
<div class="container m-auto col-6">
    <div class="display-6 text-center">CADASTRO DE MÉDICOS</div>    
        <form name="formCadMed" id="formCadMed" method="post" action="{{url('medicos')}}">
        <input type="hidden" name="id_usuario" id="id_usr" value="{{ $id_usuario ?? -1 }}">
        @csrf
            <div class="input-group p-1 ">
                <input type="text" value='{{ $medico->nome ?? ""}}' 
                class="form-control borda" name="nome" 
                placeholder="Nome do Médico" required="required" >
            </div>            
            <div class="input-group p-1">
                <input type="text" class="form-control borda" name="especialidade" 
                placeholder="Especialidade" required="required">
            </div>
            <div class="input-group p-1">
                <input type="text" class="form-control borda" name="crm" 
                placeholder="CRM" required="required">
            </div>
            <div class="btn-group p-1  w-100">                 
                <button type="submit" class="btn btn-success borda">
                    <i class="material-icons">save</i>
                    GRAVAR
                </button>
                <button type="reset" class="btn btn-warning borda">    
                    <i class="material-icons">refresh</i>            
                    REDEFINIR                    
                </button>
                <button type="button" class="btn btn-danger borda float-right" 
                 onclick="window.history.back()">    
                    <i class="material-icons">cancel</i>            
                    CANCELAR                    
                </button>
            </div>
        </form>        
    </div>
</div>
@endsection
