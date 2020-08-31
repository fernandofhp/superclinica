function del_agenda(event, id) {
    doc = document;
    win = window;
    let token=doc.getElementsByName("_token")[0].nodeValue;
    if (confirm('Deseja mesmo apagar?')) {
        let ajax=new XMLHttpRequest();
            let way=event.target.parentNode.href;
            ajax.open("GET",way);
            ajax.setRequestHeader("X-CSRF-TOKEN", token);
            ajax.onreadystatechange=function(){
                if (ajax.readyState === 4 && ajax.status === 200) {
                    //console.log('Deu certo');
                    win.location.href='agenda/'+id+'/del';
                   //win.parent.document.forms[0].submit();
                    win.document.forms[0].submit();
                }else{
                    alert('erro');
                }
            }
            ajax.send();
    }else{
        return false;
    }    
}

function del_medico(event) {
    doc = document;
    win = window;
    let token=doc.getElementsByName("_token")[0].nodeValue;
    if (confirm('Deseja mesmo apagar?')) {
        let ajax=new XMLHttpRequest();
            let way=event.target.parentNode.href;
            ajax.open("GET",way);
            ajax.setRequestHeader("X-CSRF-TOKEN", token);
            ajax.onreadystatechange=function(){
                if (ajax.readyState === 4 && ajax.status === 200) {
                    //console.log('Deu certo');
                    win.location.href='medicos';
                }else{
                    alert('erro');
                }
            }
            ajax.send();
    }else{
        return false;
    }    
}

function del_paciente(event) {
    doc = document;
    win = window;
    let token=doc.getElementsByName("_token")[0].nodeValue;
    if (confirm('Deseja mesmo apagar?')) {
        let ajax=new XMLHttpRequest();
            let way=event.target.parentNode.href;
            ajax.open("GET",way);
            ajax.setRequestHeader("X-CSRF-TOKEN", token);
            ajax.onreadystatechange=function(){
                if (ajax.readyState === 4 && ajax.status === 200) {
                    //console.log('Deu certo');
                    win.location.href='pacientes';
                }else{
                    alert('erro');
                }
            }
            ajax.send();
    }else{
        return false;
    }    
}

function del_usuario(event) {
    doc = document;
    win = window;
    let token=doc.getElementsByName("_token")[0].nodeValue;
    if (confirm('Deseja mesmo apagar?')) {
        let ajax=new XMLHttpRequest();
            let way=event.target.parentNode.href;
            ajax.open("GET",way);
            ajax.setRequestHeader("X-CSRF-TOKEN", token);
            ajax.onreadystatechange=function(){
                if (ajax.readyState === 4 && ajax.status === 200) {
                    //console.log('Deu certo');
                    win.location.href='User';                    
                }else{
                    alert('erro');
                }
            }
            ajax.send();
    }else{
        return false;
    }    
}