@extends('modelo')
@section('corpo')
<div class="container m-auto col-10" style="color: black !important;">
    <div class="display-6 text-center">AGENDAMENTOS</div>
    <div class='form-component rotulo'>        
        <B> {{ $perfil ?? '' }}: </B> {{ $nome }}       
    </div>
    <table class="table table-bordered table-striped table-outline-dark min-h-100">
        <thead  class="thead-dark">
            <tr>
                <th scope="col" class='m-0 p-1 text-center'>    HORARIO </th>
                <th scope="col" class='m-0 p-1 text-center w-50'>    NOME    </th>
                <th scope="col" class='m-0 p-1 text-center w-50'>    TIPO    </th>
                <th scope="col" class='m-0 p-1 text-center w-50'>    OBS    </th>
                <th scope="col" class='m-0 p-1 text-center w-25'>    ACAO    </th>
            </tr>
        </thead>
        <tbody>               
        @php
           use Illuminate\Support\Collection
           
        @endphp
        @foreach ($vagendas as $value)                                            
            <tr>
                <th scope="row" class='m-1 p-1 text-dark'> {{ $value->hora  ?? '' }}  </th>
                <td class='m-1 p-1 text-dark'> {{ $value->id_paciente ?? ''}} </td>
                <td class='m-1 p-1 text-dark'> {{ $value->tipo ?? ''}} </td>
                <td class='m-1 p-1 text-dark'> {{ $value->obs ?? ''}} </td>
                <td class='m-1 p-1 text-dark'>
                    <button type="button" class="alert alert-warning m-0 p-0"> CANCELAR </button>  
                </td>
            </tr>    
            @php
                
            @endphp      
        @endforeach
        </tbody>
    </table>  
</div>
</div>

@endsection