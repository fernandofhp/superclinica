@extends('modelo')
@section('corpo')
<div class="container m-auto col-6">
    <div class="display-6 text-center">AGENDAR ATENDIMENTO</div> 
    <form name="formCadPaciente" id="formCadPaciente" method="post" action="{{url('index')}}">
    @csrf
        <div class="input-group p-1 ">
            <label for="" class="form-control rotulo  col-3">Paciente:</label>                
            <label for="" class="form-control rotulo  col-2">ID: </label>                
            <label for="" class="form-control rotulo ">Nome: </label>                
        </div>
        <div class="input-group p-1">
            <label for="data" class="form-control rotulo  col-3">Data:</label> 
            <input type="date" class="form-control borda disabeld" name="data">
        </div>
        <div class="input-group p-1">
            <label for="hora" class="form-control rotulo  col-3">Hora:</label> 
            <input type="time" class="form-control borda disabeld col-sm" name="hora">
        </div>
        <div class="input-group p-1">
            <label for="medico" class="form-control rotulo col-3">Médico:</label> 
            <select class="form-control borda" name="medico" required="required">
                <option value="1">Dr Eu</option>
                <!-- Loop -->
                <option value="1">Dr Ele</option>
                <option value="1">Dr Ela</option>
                <option value="1">Dr Elis</option>
            </select>
        </div>
        <div class="input-group p-1">
            <label for="tipo" class="form-control rotulo  col-4">TIPO:</label> 
            <select class="form-control borda" name="tipo" required="required">
                <option value="CONSULTA">CONSULTA</option>
                <option value="EXAME">EXAME</option>
                <option value="CIRURGIA">CIRURGIA</option>
            </select>
        </div>

        <div class="list-group p-1">
            <label for="obs" class="list-group-item rotulo mb-0">Observação:</label>
            <textarea name="obs" id="obs" cols="30" rows="4" class="list-group-item borda mt-0"></textarea>            
        </div> 
        <div class="btn-group p-1 w-100">                 
                <button type="submit" class="btn btn-success borda">
                    <i class="material-icons">save</i>
                    GRAVAR
                </button>
                <button type="reset" class="btn btn-warning borda">    
                    <i class="material-icons">refresh</i>            
                    REDEFINIR                    
                </button>
                <button type="button" class="btn btn-danger borda float-right">    
                    <span class="material-icons">cancel</span>            
                    <span class="pt-1">CANCELAR</span>                    
                </button>
            </div>   
    </form>
</div> 
@endsection