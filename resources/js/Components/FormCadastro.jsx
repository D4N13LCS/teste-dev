import React, { useEffect, useState } from "react";
import { router } from "@inertiajs/react";

export default function FormCadastro() {
  const [csrfToken, setCsrfToken] = useState("");

  useEffect(() => {
      
    const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute("content");
    if (token) setCsrfToken(token);
  }, []);

  return (
    <main className="d-flex align-items-center justify-content-center" style={{ height: '100vh' }}>
      <form className="container border rounded p-5" method="POST" action="/cadastro/create">
        
        <input type="hidden" name="_token" value={csrfToken} />

        <div className="mb-3">
          <label className="form-label" htmlFor="nome">Nome</label>
          <input required type="text" name="nome" className="form-control" id="nome" />
        </div>

        <div className="d-flex mb-3 gap-4">
          <div className="w-50">
            <label className="form-label" htmlFor="telefone">Telefone</label>
            <input required type="text" name="telefone" className="form-control" id="telefone" />
          </div>
          <div className="w-50">
            <label className="form-label" htmlFor="idade">Idade</label>
            <input required type="number" name="idade" className="form-control" id="idade" />
          </div>
        </div>

        <div className="mb-3">
          <label className="form-label" htmlFor="cep">CEP</label>
          <input required type="text" name="cep" className="form-control" id="cep" />
        </div>

        <div className="mb-3">
          <label className="form-label" htmlFor="rua">Rua</label>
          <input required type="text" name="rua" className="form-control" id="rua" />
        </div>

        <div className="d-flex mb-3 gap-4">
          <div className="mb-3 w-50">
            <label className="form-label" htmlFor="numero">Número</label>
            <input required type="text" name="numero" className="form-control" id="numero" />
          </div>
          <div className="mb-3 w-50">
            <label className="form-label" htmlFor="complemento">Complemento</label>
            <input required type="text" name="complemento" className="form-control" id="complemento" />
          </div>
        </div>

        <div className="d-flex mb-3 gap-4">
          <div className="mb-3 w-50">
            <label className="form-label" htmlFor="estado">Estado</label>
            <select required className="form-select mb-3" name="estado" id="estado">
              <option value="">Selecione um estado</option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
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
            <input required type="text" name="cidade" className="form-control" id="cidade" />
          </div>
        </div>

        <div className="d-flex gap-3">
            <button type="button" className="btn btn-secondary w-50" onClick={()=>{router.get('/')}}>Cancelar</button>
            <button type="submit" className="btn btn-success w-50">Cadastrar</button>
        </div>
      </form>
    </main>
  );
}
