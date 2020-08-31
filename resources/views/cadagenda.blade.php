@extends('modelo')
@section('corpo')
<div class="container m-auto col-12">
    <div class="display-6 text-center">AGENDAR ATENDIMENTO</div> 
    <form name="formCadAgenda" id="formCadAgenda" method="post" action="{{url('/agenda')}}">
    @csrf
        <?php 
            //$pefil = isset($pefil) ? ($pefil) : ('');
            $data = isset($data) ? ($data) : date('Y-m-d', time());
            $hora = isset($hora) ? ($hora) : '08:00';
        ?>        
        <div class="input-group p-1 ">
            <input class="form-control rotulo  col-3" readonly  value="{{ $perfil ?? '' }}" name="perfil">                                         
            <input class="form-control rotulo " value="{{ $nome ?? '' }}" name="nome" >                
        </div>
        <div class="input-group p-1">
            <label for="data" class="form-control rotulo  col-3">Data:</label> 
            <input type="date" class="form-control borda " name="data" id="data" value="{{ $data }}">
        </div>
        <div class="input-group p-1">
            <label for="hora" class="form-control rotulo  col-3">Hora:</label> 
            <input type="time" class="form-control borda  col-sm" name="hora"  id="hora" value="{{ $hora }}">
        </div>
        <input type="hidden" name="datahora" id="datahora" value="{{ $datahora ?? ''}}">
        <input type="hidden" name="id_perfil" value=" {{ $id_perfil }} "  id="idperf" >
        <div class="input-group p-1">
            <label for="medico" class="form-control rotulo col-3"> {{ $perfil_lista ?? '' }} :</label> 
            <select class="form-control borda" name="id_lista" required="required">
              <option value="0"></option>
               @foreach($lista as $item)
                <option value=" {{ $item->id ?? 0}} "> {{ $item->nome ?? '' }} </option>
                @endforeach                
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
                    var doc = document;
                    var datahora = doc.getElementById("datahora");
                    var data = doc.getElementById("data");
                    var hora = doc.getElementById("hora");
                    datahora.value = data.value + 'T' + hora.value;
                    doc.getElementById("formCadAgenda").submit();
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