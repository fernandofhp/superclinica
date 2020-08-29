@extends('modelo')    
<script>
    $( function() {           
    $( "#calendario" ).datepicker({
    altField: "#hoje",          
    altFormat: "dd/mm/yy",
    dateFormat: 'dd/mm/yy',
    dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
    dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
    monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
    monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
    nextText: 'Proximo',
    prevText: 'Anterior'
    });            
}); 

</script>
@section('corpo')
<div class="container m-auto">
        <div class="container w-75" >
            <div class="display-4 text-center">AGENDA CONSULTORIO</div>
                <div class="alert-primary border border-dark text-center text-dark">                
                    <b><i class="material-icons">person</i> </b>                 
                </div>
                <div class="container">
                    <!-- TABLE -->
                    <div class="row">
                        <div class="col- border border-dark">                                
                            <div  class="datepicker"></div>
                              
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
                        @csrf
                            <input id="calendario" name="calendario" type="date" class="form-control borda">
                            <input type="hidden" name="perfil" id="perfil" value="MEDICO">
                            <input type="hidden" name="hj" id="hj" >
                            <input type="hidden" name="medico" id="medico" value="FERNANDO">
                            <input type="hidden" name="paciente" id="paciente" value="">
                            
                            <input type="hidden" name="id_medico" id="id_medico" value="1">
                            <input type="hidden" name="id_paciente" id="id_paciente" value="1">

                            <ul class="list-group mt-2">
                                <li class="list-group-item">
                                    <div class="input-group p-1">
                                       <label for="locnome" 
                                       class="form-control bg-secondary text-light col-3">                                                                      
                                    </label>
                                       <input type="text" name="locnome" onchange="buscar();"
                                       id="locnome" Placeholder="Nome" class="col-lg-8"
                                       value="{{$locnome ?? ''}}"> 
                                    </div>
                                </li>
                                
                                <li class="list-group-item h-100 d-inline-block overflow-auto" >                                                                      
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
                                    <tr>
                                        <th scope="row" class='m-1 p-1'>    </th>
                                        <td class='m-1 p-1'>             </td>
                                        <td class='m-1 p-1'>
                                            <button type="button" class="alert alert-warning m-0 p-0">                                                
                                                CANCELAR                                    
                                            </button>         
                                        </td>
                                    </tr>                                                           
                                       
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