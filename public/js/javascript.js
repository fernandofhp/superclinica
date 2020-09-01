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






(function(win, doc){
    'use strict'
    //DELETE
    function confirmDel(event){
        //alert(event.target.parentNode.href);
        let token=doc.getElementsByName("_token")[0].value;
        if(confirm("Deseja mesmo Cancelar Agendamento?")){
            let ajax = new XMLHttpRequest();
            ajax.open("DELETE", event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN', token);
            ajax.onreadystatechange=function(){
                if(ajax.readyDtate === 4 && ajax.status === 200){
                    alert('Deu certo!');
                }
            };    
            ajax.send();
        }else{
            retur false;
        }
    }
    if(doc.querySelector('.js-del')){
        let bnt = doc.querySelectorAll('.js-del');
        for (let i=0 = 0; i < btn.length; i++) {
            btn[i].addEventListener('click'.confirmDel, false)                
        }
    }    
})(window, document);
