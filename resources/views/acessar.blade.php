@extends('modelo')
@section('corpo')
<div class="container m-auto col-6">
    <div class="display-6 text-center">ACESSAR CONTA</div> 
    <form name="formAcessar" id="formAcessar" method="post" action="{{url('agenda/main')}}">
    @csrf
        <div class="input-group p-1 ">            
            <label for="perfil" class="form-control rotulo col-sm-3 ">PERFIL:</label>
            <select name="perfil" id="perfil" class="form-control borda" 
                onchange="document.getElementById('perfil_usr').value = this.value">                
                <option value="PACIENTE">PACIENTE</option>
                <option value="MEDICO">MEDICO</option>
           </select>            
        </div>
        <div class="input-group p-1">
            <input type="text" class="form-control borda" name="name" id="name" placeholder="usuario" 
            required="required" value="Clotilde">
        </div>
        <div class="input-group p-1">
            <input type="password" class="form-control borda" name="password" id="pass"
            placeholder="Senha" required="required" value="clotil123">
        </div>        
        <div class="form-group p-1">                                 
            <button type="submit" class="form-control btn btn-primary borda">ENTRAR</button>                                 
        </div>         
    </form>
    <form name="formCadUser" id="formCadUser" method="get" action="usuarios/create">
        @csrf
        <div class="input-group p-1"> 
            <label class="form-control borda">Ainda não tem cadastro? </label>
            <script>
                function copiar_dados() {
                    doc = document;
                    form = doc.getElementById('formCadUser');
                    perfil_usr = doc.getElementById('perfil_usr');
                    name_usr = doc.getElementById('name_usr');
                    pass_usr = doc.getElementById('pass_usr');
                    perfil = doc.getElementById('perfil');
                    name = doc.getElementById('name');
                    pass = doc.getElementById('pass');
                    // clonagem de Dados
                    perfil_usr.value = perfil.value;
                    name_usr.value = name.value;
                    pass_usr.value = pass.value;
                    form.submit();
                }
            </script>
            <button type="button" class="form-control btn btn-success borda"
                onclick="copiar_dados();" >
                Clique aqui: CADASTRAR
            </button>
            <input type="hidden" name="perfil"      id="perfil_usr" value="PACIENTE">
            <input type="hidden" name="name"        id="name_usr"   value="">
            <input type="hidden" name="password"    id="pass_usr"   value="">
        </div>
    </form>
</div> 
@endsection