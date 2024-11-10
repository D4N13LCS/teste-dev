const mostrar_endereco = document.querySelectorAll('.address_btn');
const edit = document.querySelectorAll('.edit');
const modal = [...document.getElementsByClassName('modal')];
const campo = document.querySelectorAll('.campo');
const save = document.querySelectorAll('.save');
const btn_del = document.querySelectorAll('#form_del button');

// function stopEventPropagation(event) {
//     event.stopPropagation(); 
// }


edit.forEach((e, i)=>{
    e.addEventListener('click', (evt)=>{
        evt.preventDefault()
        const registros = [...evt.target.parentElement.parentElement.children[2].children]
        console.log()
        const modal_filhos = [...evt.target.parentElement.parentElement.children[2].nextElementSibling.children[0].children[0].children];
        
        if(e.innerText === 'Editar'){
            registros.forEach((registro)=>{
                registro.children[1].removeAttribute('readonly')
            })
            modal_filhos.forEach((modal_filho)=>{
                modal_filho.children[1].removeAttribute('readonly')
            })
            save[i].style.display = 'block';
            e.innerText = 'cancelar'
        }else{
            registros.forEach((registro)=>{
                registro.children[1].setAttribute('readonly', 'readonly')
            })
            modal_filhos.forEach((modal_filho)=>{
                modal_filho.children[1].setAttribute('readonly', 'readonly')
            })
            save[i].style.display = 'none';
            e.innerText = 'Editar'
        }
        
        
    })
})

mostrar_endereco.forEach((botao, ind)=>{
    botao.addEventListener('click', (evt)=>{
        evt.preventDefault()
        if(botao.innerText === 'Mostrar endereço'){
            modal[ind].style.display = 'flex';
            botao.innerHTML = 'Omitir endereço'
        }else{
            modal[ind].style.display = 'none';
            botao.innerHTML = 'Mostrar endereço'
        }
            

    })
})