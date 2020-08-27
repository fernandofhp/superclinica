@extends('modelo')
@section('corpo')
<div class="container m-auto col-6">
    <div class="display-6 text-center">CADASTRO DE MÉDICOS</div>    
        <form name="formCadPaciente" id="formCadPaciente" method="post" action="{{url('index')}}">
            <div class="input-group p-1 ">
                <input type="text" value='{{$medico->nome ?? ""}}' 
                class="form-control borda" name="medico" 
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
                <button type="button" class="btn btn-danger borda float-right">    
                    <i class="material-icons">cancel</i>            
                    CANCELAR                    
                </button>
            </div>
        </form>        
    </div>
</div>
<!--
<div class="card" style="width: 20rem;">
    <img class="card-img-top" src="img/minidoc.png" alt="imagem">            
    <div class="card-body">
        <h5 class="card-title">Medico</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">OK</a>
    </div>
</div>
<hr> -->

@endsection
