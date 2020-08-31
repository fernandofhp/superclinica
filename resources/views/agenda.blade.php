@extends('modelo')
@section('corpo')
<form name="formAgenda" id="formAgenda" action="/agenda/main" method="post">
@csrf
<div class="container m-auto col-12" style="color: black !important;">
    <div class="display-6 text-center">AGENDAMENTOS</div>
    <div class='form-component rotulo'>        
        <B> {{ $perfil ?? '' }}: </B> {{ $nome }} 
        <input type="hidden" name="nome" id="nome1" value="{{ $nome ?? ''}}">    
        <input type="hidden" name="perfil" id="perfil1" value="{{ $perfil ?? ''}}">      
    </div>
    <?php
        //$data =   date('Y-m-d',strtotime($data));
        //$data = DateTime::createFromFormat('Y-m-d', $locdt);
        $data = $data;
    ?>
    
    <div class="input-group ">
        <input type="date" name="data" id="data" value="{{$data}}" 
            class="form-control borda" onchange="">
        <button type="submit" class="btn btn-success form-control borda">Pesquisar</button>
    </div>
    
    <table class="table table-bordered table-striped table-outline-dark min-h-100">
        <thead  class="thead-dark">
            <tr>
                <th scope="col" class='m-0 p-1 text-center'>    HORARIO </th>
                <th scope="col" class='m-0 p-1 text-center w-50'>    NOME    </th>
                <th scope="col" class='m-0 p-1 text-center w-50'>    TIPO    </th>
                <th scope="col" class='m-0 p-1 text-center w-50'>    OBS    </th>
                <th scope="col" class='m-0 p-1 text-center w-25'>    ACÕES </th>
            </tr>
        </thead>
        <tbody>               
       
        @foreach ($vagendas as $value) 
        @php
           
           $hora = isset($value->hora) ? date("H:i", strtotime($value->hora)) : '';
           //$hora = isset($hora) ? ($hora) : ('') ; 
           $medico = isset($value->medicos->nome) ? $value->medicos->nome : '';           
           $paciente = isset($value->pacientes->nome) ? $value->pacientes->nome : ''; 
           $nomelist = ($perfil == 'MEDICO') ? $paciente  : $medico;         
        @endphp                                           
            <tr class="pt-auto pb-auto">
                <th scope="row" class='m-1 p-1 text-dark'> {{ $hora }}  </th>
                <td class='m-1 p-1 text-dark'> {{ ($nomelist) ?? ('') }} </td>
                <td class='m-1 p-1 text-dark'> {{ $value->tipo ?? ''}} </td>
                <td class='m-1 p-1 text-dark'> {{ $value->obs ?? ''}} </td>
                <td class='m-1 p-1 text-dark btn-group'>                                           
                        <button type="button" class="btn btn-primary p-1 form-control" 
                        title='EDITAR /ALTERAR AGENDAMENTO'>
                            <i class="material-icons">edit</i>                                                           
                        </button>
                        <button type="button" class="btn btn-warning p-1 form-control" 
                        title='EXCLUIR / CANCELAR AGEDAMENTO'>
                            <i class="material-icons">delete</i> 
                        </button>                    
                </td>
            </tr>    
            @php
                
            @endphp      
        @endforeach
        </tbody>
    </table>  
</div>
</div>

    <input type="hidden" name="id_perfil" id="id_perfil" value="{{ $id_perfil ?? ''}}">    
        
    <input type="hidden" name="name" id="name1" value="{{ $name ?? ''}}">    
    <input type="hidden" name="password" id="password1" value="{{ $password ?? ''}}">    
        
    <div class="class">
        <script>
            function vai(){
                try{
                document.getElementById('formAgenda').action = "/agenda/create";
                document.getElementById('formAgenda').method = "get";
                document.getElementById('formAgenda').submit();
                }catch(erro){
                    console.log('erro: ' + erro);
                }
            }
        </script>
            <button type="button" class="btn btn-success m-auto" onclick="vai();">
            <i class="material-icons">create_new_folder</i>
            MARCAR AGENDAMENTO                                    
            </button> 
        
    </div>
    
</form>

@endsection