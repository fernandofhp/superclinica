@extends('modelo')
@section('corpo')
<div class="container m-auto col-6">
    <div class="display-6 text-center">ACESSAR CONTA</div> 
    <form name="formCadPaciente" id="formCadPaciente" method="get" action="{{url('agenda')}}">
        <div class="input-group p-1 ">            
            <label for="perfil" class="form-control rotulo col-sm-3 ">PERFIL:</label>
            <select name="perfil" id="perfil" class="form-control borda">
               <option value="PACIENTE">PACIENTE</option>
               <option value="MEDICO">MEDICO</option>
           </select>            
        </div>
        <div class="input-group p-1">
            <input type="text" class="form-control borda" name="usuario" placeholder="usuario" required="required">
        </div>
        <div class="input-group p-1">
            <input type="password" class="form-control borda" name="password1" placeholder="Senha" required="required">
        </div>        
        <div class="form-group p-1">                                 
            <button type="submit" class="form-control btn btn-primary borda">ENTRAR</button>                                 
        </div> 
    </form>
    <form name="formLcadUser" id="formLcadUser" method="get" action="usuarios">
        @csrf
        <div class="input-group p-1"> 
            <label class="form-control borda">Ainda não tem cadastro? </label>
            <button type="submit" class="form-control btn btn-success borda">Clique aqui: CADASTRAR</button>
        </div>
    </form>
</div> 
@endsection