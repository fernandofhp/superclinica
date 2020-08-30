@extends('modelo')
@section('corpo')
<div class="container m-auto">
    <div class="container w-75" >
        <div class="display-4 text-center">CADASTRO DE USUARIOS</div>  
        <?php
            $pefil = verifica($perfil);
            //$acao = ($perfil == 'MEDICO') ? 'cadmedico': 'cadpaciente';
        ?>          
        <form name="formUsuario" id="formLogin" method="post" action="{{url('usuarios')}}">             
        @csrf                
            <div class="input-group p-1">
                <label for="perfil" class="form-control rotulo">PERFIL:</label>
                
                <input type="text" name="perfil" class="form-control rotulo " 
                value="{{ $perfil ?? 'PACIENTE' }}" readonly >           
            </div>
            <div class="input-group p-1">
                <input type="text" class="form-control borda" name="usuario" placeholder="usuario" 
                required="required" value="ze_ruela">
            </div>
            <div class="input-group p-1">
                <input type="password" class="form-control borda" name="password1" value="ruela" 
                placeholder="Senha" required="required">
            </div>
            <div class="input-group p-1">
                <input type="password" class="form-control borda" name="password2" value="ruela"
                placeholder="Repita a senha" required="required">
            </div>
            <div class="input-group p-1">
                <input type="text" class="form-control borda" name="email" value="ze@ruela.com.br"
                placeholder="e-mail" required="required">
            </div>            
            <div class="btn-group p-1 form-control"> 
                <button type="submit" class="form-control btn btn-success borda">                
                    <i class="material-icons">save</i>
                    GRAVAR E CONTINUAR <!-- <i class="material-icons">chevron_right</i> -->                    
                </button>                           
                <button type="reset" class="form-control btn btn-warning borda">    
                    <i class="material-icons">refresh</i>            
                    REDEFINIR                    
                </button>                
                <button type="button" onclick="window.history.back()"
                        class="form-control btn btn-danger borda">                    
                    <i class="material-icons">cancel</i>
                    CANCELAR E VOLTAR <!-- <i class="material-icons">chevron_left</i> -->                    
                </button>
            </div>
        </form>
        <hr>
    </div>
</div>
@endsection