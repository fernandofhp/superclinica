@extends('modelo')
@section('corpo')
<div class="container m-auto">
    <div class="container w-75" >
        <div class="display-4 text-center">CADASTRO DE USUARIOS</div>    
        <form name="formLogin" id="formLogin" method="post" action="{{url('login')}}">                 
            <div class="input-group p-1">
                <label for="perfil" class="form-control rotulo">PERFIL:</label>
                <label class="form-control rotulo"></label>            
            </div>
            <div class="input-group p-1">
                <input type="text" class="form-control borda" name="usuario" placeholder="usuario" required="required">
            </div>
            <div class="input-group p-1">
                <input type="password" class="form-control borda" name="password1" placeholder="Senha" required="required">
            </div>
            <div class="input-group p-1">
                <input type="password" class="form-control borda" name="password2" placeholder="Repita a senha" required="required">
            </div>
            <div class="input-group p-1">
                <input type="text" class="form-control borda" name="email" placeholder="e-mail" required="required">
            </div>            
            <div class="input-group p-1">                 
                <button type="button" class="form-control btn btn-danger borda">                    
                    <i class="material-icons">cancel</i>
                    VOLTAR <!-- <i class="material-icons">chevron_left</i> -->                    
                </button>
                <button type="reset" class="form-control btn btn-warning borda">    
                    <i class="material-icons">refresh</i>            
                    REDEFINIR                    
                </button>
                <button type="button" class="form-control btn btn-success borda">                
                    <i class="material-icons">save</i>
                    PRÓXIMO <!-- <i class="material-icons">chevron_right</i> -->                    
                </button>
            </div>
        </form>
        <hr>
    </div>
</div>
@endsection