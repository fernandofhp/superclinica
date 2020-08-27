@extends('modelo')
@section('corpo')
<div class="container m-auto">
        <div class="container w-75" >
            <div class="display-4 text-center">AGENDA CONSULTORIO</div>
                <div class="alert-primary border border-dark text-center text-dark">
                @if(($perfil ?? '')=='PACIENTE')        
                    <b><i class="material-icons">content_paste</i></b>
                     {{ $paciente->nome ?? ''}}
                     @php
                         $perfbusca = 'MEDICO'           
                     @endphp
                @else  
                    <b><i class="material-icons">person</i> </b> 
                    {{ $medico->nome ?? ''}} 
                    @php
                         $perfbusca = 'PACIENTE'           
                     @endphp                   
                @endif
                
                </div>
                <div class="container">
                    <!-- TABLE -->
                    <div class="row">
                        <div class="col- border border-dark">
                                
                            <div id="calendario"></div>  
                            <div class="form-group p-1 text-center">                 
                                <button type="button" class="btn btn-info m-auto">
                                    <i class="material-icons">edit</i>
                                    EDITAR DADOS                                    
                                </button> 
                            </div>
                            <div class="form-group p-1 text-center">                 
                                <button type="button" class="btn btn-success m-auto">
                                    <i class="material-icons">create_new_folder</i>
                                    NOVO CADASTRO                                    
                                </button> 
                            </div>
                            <div class="form-group p-1 text-center">                 
                                <button type="button" class="btn btn-danger m-auto">
                                    <i class="material-icons">delete_forever</i>
                                    EXCLUIR CONTA                                    
                                </button> 
                            </div>
                        </div>
                        
                        <div class="col-lg border border-dark">
                        <form action="agenda/busca" name="formAgenda" id="formAgenda" method="get">
                            <input type="hidden" name="perfil" id="perfil" value="{{ $perfil ?? ''}}">
                            <input type="hidden" name="hj" id="hj" >
                            <input type="hidden" name="medico" id="medico" value="{{ $medico->nome ?? ''}}">
                            <input type="hidden" name="paciente" id="paciente" value="{{ $paciente->nome ?? ''}}">
                            @php
                                $idmed          = (isset($id_medico)    ? ($id_medico)      : 0);                                
                                $idpac          = (isset($id_paciente)  ? ($id_paciente)    : 0);
                                $id_paciente    = (isset($paciente->id) ? ($paciente->id)   : $idpac);
                                $id_medico      = (isset($medico->id)   ? ($medico->id)     : ($idmed));
                                echo "[ID_MEDICO: $id_medico - ID_PACIENTE: $id_paciente ]";
                            @endphp
                            <input type="hidden" name="id_medico" id="id_medico" value="{{ ($medico->id ?? ($id_medico)) ?? 0}}">
                            <input type="hidden" name="id_paciente" id="id_paciente" value="{{ ($paciente->id ?? ($id_paciente)) ?? 0}}">

                            <ul class="list-group mt-2">
                                <li class="list-group-item">
                                    <div class="input-group p-1">
                                       <label for="locnome" 
                                       class="form-control bg-secondary text-light col-3">
                                       
                                       {{($perfbusca ?? '')}}:
                                    </label>
                                       <input type="text" name="locnome" onchange="buscar();"
                                       id="locnome" Placeholder="Nome" class="col-lg-8"
                                       value="{{$locnome ?? ''}}"> 
                                    </div>
                                </li>
                                
                                <li class="list-group-item h-100 d-inline-block overflow-auto" >
                                    @php
                                        $agenda = isset($agenda) ? $agenda : array();
                                    @endphp                                    
                                    <input type="text" id="hoje" class="form-control text-center">

                                    <table class="table table-bordered table-striped table-outline-dark min-h-100">
                                    <thead  class="thead-dark">
                                    <tr>
                                        <th scope="col" class='m-0 p-1 text-center'>    HORARIO </th>
                                        <th scope="col" class='m-0 p-1 text-center w-50'>    NOME    </th>
                                        <th scope="col" class='m-0 p-1 text-center w-25'>    ACAO    </th>
                                    </tr>
                                    </thead>
                                    <tbody>                                                                                                          
                                    @foreach($agenda as $agend)
                                    @php
                                        $horario = $agend->grade_hora;
                                        $displaynome = ($perfil == 'MEDICO') ?
                                         ($agend->medico) : 
                                         ($agend->paciente);
                                         $tipo = isset($agend->tipo) ? $agend->tipo : '';
                                         $aux = isset( $displaynome) ?  $displaynome : '';
                                         $aux = "$tipo: $aux" ;
                                    @endphp
                                    <tr>
                                        <th scope="row" class='m-1 p-1'>  {{ $horario  }}  </th>
                                        <td class='m-1 p-1'>       {{ $aux }}         </td>
                                        <td class='m-1 p-1'>
                                            <button type="button" class="alert alert-warning m-0 p-0">                                                
                                                CANCELAR                                    
                                            </button>         
                                        </td>
                                    </tr>
                                @endforeach                                 
                                       
                                    </tbody>
                                    </table>
                                </li>
                            </ul>
                          </form>  
                        </div>   
                                           
                    </div>
                    <!-- TABLE -->
                </div>
            </div>
        </div>
    </div>
@endsection