@extends('modelo')
@section('corpo')
<div class="container m-auto">
        <div class="container w-75" >
            <div class="display-4 text-center">AGENDA CONSULTORIO</div>
                <div class="alert-primary border border-dark text-center text-dark">
                     
                    <b><i class="material-icons">content_paste</i></b>
                   
                    <b><i class="material-icons">person</i> </b> 
                    
                
                </div>
                <div class="container">
                    <!-- TABLE -->
                    <div class="row">
                        <div class="col- border border-dark">
                                
                            <div id="calendario"></div>  
                            <div class="form-group p-1 text-center">                 
                                 
                            </div>
                            <div class="form-group p-1 text-center">                 
                                
                            </div>
                            <div class="form-group p-1 text-center">                 
                                
                            </div>
                        </div>
                        
                        <div class="col-lg border border-dark">
                        <form action="agenda/busca" name="formAgenda" id="formAgenda" method="get">
                           
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
                                        <th scope="row" class='m-1 p-1'>  </th>
                                        <td class='m-1 p-1'>              </td>
                                        <td class='m-1 p-1'>
                                                    
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