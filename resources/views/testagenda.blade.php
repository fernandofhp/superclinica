@extends('modelo')
@section('corpo')
<form action="{{url('')}}" method="post">
<div class="container m-auto col-12" style="color: black !important;">
    <div class="display-6 text-center">AGENDAMENTOS</div>
    <div class='form-component rotulo'>        
        <B> {{ $perfil ?? '' }}: </B> {{ $nome }}       
    </div>
    <?php
        //$data =   date('Y-m-d',strtotime($data));
        //$data = DateTime::createFromFormat('Y-m-d', $locdt);
        $data = $data;
    ?>
    <input type="date" name="data" id="data" class="form-control borda" value="{{$data}}">
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
           $hora = date("H:i", strtotime($value->hora));
           $hora = isset($hora) ? ($hora) : ('') ; 
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

    <input type="hidden" name="perfil" id="perfil" value="{{ $perfil ?? ''}}">    
    <div class="class">
        <button type="button" class="btn btn-success m-auto">
            <i class="material-icons">create_new_folder</i>
            MARCAR AGENDAMENTO                                    
        </button> 
    
    </div>
    
</form>

@endsection