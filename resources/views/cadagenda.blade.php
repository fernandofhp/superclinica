@extends('modelo')
@section('corpo')
<div class="container m-auto col-12">
    <div class="display-6 text-center">AGENDAR ATENDIMENTO</div> 
    <form name="formCadAgenda" id="formCadAgenda" method="post" action="{{url('agenda')}}">
    @csrf
        <?php 
            $pefil = isset($pefil) ? ($pefil) : ('');
        ?>        
        <div class="input-group p-1 ">
            <label for="" class="form-control rotulo  col-3"> {{ $perfil }}:</label>                                         
            <label for="" class="form-control rotulo ">Nome: </label>                
        </div>
        <div class="input-group p-1">
            <label for="data" class="form-control rotulo  col-3">Data:</label> 
            <input type="date" class="form-control borda " name="data" id="data">
        </div>
        <div class="input-group p-1">
            <label for="hora" class="form-control rotulo  col-3">Hora:</label> 
            <input type="time" class="form-control borda  col-sm" name="hora"  id="hora">
        </div>
        <input type="hidden" name="datahora" value="datahora"  id="datahora">
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
            <script>
                function copia_tempo(){
                    doc = document;
                    datahora = doc.getElementById("datahora");
                    data = doc.getElementById("data");
                    hora = doc.getElementById("hora");
                    datahora.value = data.value + 'T' + hora.value;
                    //doc.getElementById("datahora").submit();
                }
            </script>               
                <button type="button" onclick="copia_tempo();"
                        class="btn btn-success borda">
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