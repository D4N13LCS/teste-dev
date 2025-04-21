import React from 'react';
import { usePage, router } from '@inertiajs/react';

export default function FormEdit() {
    const {props} = usePage();

    function destructure_field(){
        const campos = [...document.querySelectorAll('.campo')];
        const nome = campos[0].value;
        const telefone = campos[1].value;
        const idade = campos[2].value;
        const cep = campos[3].value;
        const rua = campos[4].value;
        const numero = campos[5].value;
        const complemento = campos[6].value;
        const estado = campos[7].value;  
        const cidade = campos[8].value;  

        return {nome, telefone, idade, cep, rua, numero, complemento, estado, cidade}
    }


  return (
    <main className="d-flex align-items-center justify-content-center" style={{ height: '100vh' }}>
      <form className="container border rounded p-5" method="POST" action="">

        <div className="mb-3">
          <label className="form-label" htmlFor="nome">Nome</label>
          <input required type="text" name="nome" className=" campo form-control" id="nome" defaultValue={props.nome}/>
        </div>

        <div className="d-flex mb-3 gap-4">
          <div className="w-50">
            <label className="form-label" htmlFor="telefone">Telefone</label>
            <input required type="text" name="telefone" className=" campo form-control" id="telefone" defaultValue={props.telefone}/>
          </div>
          <div className="w-50">
            <label className="form-label" htmlFor="idade">Idade</label>
            <input required type="number" name="idade" className=" campo form-control" id="idade" defaultValue={props.idade}/>
          </div>
        </div>

        <div className="mb-3">
          <label className="form-label" htmlFor="cep">CEP</label>
          <input required type="text" name="cep" className=" campo form-control" id="cep" defaultValue={props.cep}/>
        </div>

        <div className="mb-3">
          <label className="form-label" htmlFor="rua">Rua</label>
          <input required type="text" name="rua" className=" campo form-control" id="rua" defaultValue={props.rua}/>
        </div>

        <div className="d-flex mb-3 gap-4">
          <div className="mb-3 w-50">
            <label className="form-label" htmlFor="numero">Número</label>
            <input required type="text" name="numero" className=" campo form-control" id="numero" defaultValue={props.numero}/>
          </div>
          <div className="mb-3 w-50">
            <label className="form-label" htmlFor="complemento">Complemento</label>
            <input required type="text" name="complemento" className=" campo form-control" id="complemento" defaultValue={props.complemento}/>
          </div>
        </div>

        <div className="d-flex mb-3 gap-4">
          <div className="mb-3 w-50">
            <label className="form-label" htmlFor="estado">Estado</label>
            <select required className=" campo form-select mb-3" name="estado" id="estado" defaultValue={props.estado}>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option> campo 
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
            </select>
          </div>
          <div className="mb-3 w-50">
            <label className="form-label" htmlFor="cidade">Cidade</label>
            <input required type="text" name="cidade" className=" campo form-control" id="cidade" defaultValue={props.cidade} />
          </div>
        </div>
        <div className='d-flex gap-4'>
          <button type="button" className="btn btn-secondary w-50" onClick={()=>{router.get('/')}}>Cancelar</button>
          <button type="button" onClick={()=>{
            const campos = destructure_field();
            console.log(campos)
            router.put(`contacts/${props.id}/update`, {id: props.id, nome: campos.nome, idade: campos.idade, telefone: campos.telefone, cep: campos.cep, rua: campos.rua, numero: campos.numero, complemento: campos.complemento, estado: campos.estado, cidade: campos.cidade})
          }} className="btn btn-success w-50">Salvar</button>
        </div>
      </form>
    </main>
  );
}
