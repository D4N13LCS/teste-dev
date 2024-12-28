const modal = document.querySelectorAll('.endereco');
const exibir = document.querySelectorAll('.Exibir');
const editar = document.querySelectorAll('.Editar');
const save = document.querySelectorAll('.save')
const info = document.querySelectorAll('.infoAparente');
const form = document.querySelector('form');
const methodInput = form.querySelector('input[name="_method"]');

exibir.forEach((el,ind)=>{
    el.addEventListener('click', (evt)=>{
        evt.preventDefault();
        el.innerText === 'Exibir endereço'?el.innerText='Esconder endereço':el.innerText='Exibir endereço';
        modal[ind].style.display === 'flex'?modal[ind].style.display='none':modal[ind].style.display='flex';
    });
})


editar.forEach((el, i)=>{
    el.addEventListener('click', (evt)=>{
        evt.preventDefault();

        save[i].classList.toggle('hidden')

        el.innerText === 'Editar informações'?el.innerText='cancelar edição ':el.innerText='Editar informações';

        const filhosInfo = [...info[i].children]
        filhosInfo.forEach((e)=>{
            e.children[1].children[0].toggleAttribute('readonly');
        })

        const filhosModal = [...modal[i].children[1].children]
        filhosModal.forEach((e)=>{
            e.children[1].children[0].toggleAttribute('readonly');
        })
    })
})


document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('form');

    forms.forEach(form => {
        const methodInput = form.querySelector('input[name="_method"]');

        form.addEventListener('submit', (event) => {
            const clickedButton = event.submitter; 

            if (clickedButton.classList.contains('Deletar')) {
                methodInput.value = 'DELETE';
                alert('Contato deletado com sucesso!');
            } else if (clickedButton.classList.contains('save')) {
                methodInput.value = 'PUT';
                alert('Contato editado com sucesso!');
            }
            })
        });
    });

    