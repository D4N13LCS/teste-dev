import { useState } from "react";
import { FaSearch, FaFilter } from 'react-icons/fa';
import { router } from "@inertiajs/react";

export default function FilterContacts() {
    const [campo, setCampo] = useState('nome');
    const [busca, setBusca] = useState('');

    function filtrar() {
        router.get('/', {
            search: busca,
            campo: campo,
        });
    }

    function mostrar_filtro() {
        const modal = document.getElementsByClassName('filtro')[0];
        modal.classList.contains('d-flex')
            ? modal.classList.replace('d-flex', 'd-none')
            : modal.classList.replace('d-none', 'd-flex');
    }

    return (
        <>
            <div className="transicao d-flex flex-column justify-content-center gap-3 w-100">
                <div className='d-flex justify-content-center align-items-center gap-3'>
                    <div className='d-flex justify-content-between bg-secondary rounded-pill p-2 searchbar' style={{ color: 'white', width: '325px' }}>
                        <input
                            type="text"
                            className="border-0 bg-secondary searchbar"
                            placeholder="Busque aqui"
                            value={busca}
                            onChange={(e) => setBusca(e.target.value)}
                        />
                        <div className="d-flex align-items-center p-2 bg-dark" style={{ borderRadius: '50%' }} onClick={filtrar}>
                            <FaSearch />
                        </div>
                    </div>
                    <div className="d-flex align-items-center justify-content-center border" style={{ height: '48px', width: '48px', borderRadius: '50%' }} onClick={mostrar_filtro}>
                        <FaFilter />
                    </div>
                </div>

                <div className="d-flex justify-content-center align-items-center gap-3 w-90">
                    <ul className="filtro d-none flex-column align-items-start m-0 p-2 border bg-light" style={{ borderRadius: '10px', width: '400px' }}>
                        <div className="d-flex gap-2">
                            <input id='isequencial' type="radio" name='opcao' onChange={() => setCampo('id')} /> Sequencial
                        </div>
                        <div className="d-flex gap-2">
                            <input id='inome' type="radio" name='opcao' defaultChecked onChange={() => setCampo('nome')} /> Nome
                        </div>
                        <div className="d-flex gap-2">
                            <input id='iIdade' type="radio" name='opcao' onChange={() => setCampo('idade')} /> Idade
                        </div>
                        <div className="d-flex gap-2">
                            <input id='itelefone' type="radio" name='opcao' onChange={() => setCampo('telefone')} /> Telefone
                        </div>
                        <div className="d-flex gap-2">
                            <input id='icep' type="radio" name='opcao' onChange={() => setCampo('cep')} /> CEP
                        </div>
                        <div className="d-flex gap-2">
                            <input id='irua' type="radio" name='opcao' onChange={() => setCampo('rua')} /> Rua
                        </div>
                        <div className="d-flex gap-2">
                            <input id='inumero' type="radio" name='opcao' onChange={() => setCampo('numero')} /> Número
                        </div>
                        <div className="d-flex gap-2">
                            <input id='icomplemento' type="radio" name='opcao' onChange={() => setCampo('complemento')} /> Complemento
                        </div>
                        <div className="d-flex gap-2">
                            <input id='icidade' type="radio" name='opcao' onChange={() => setCampo('cidade')} /> Cidade
                        </div>
                        <div className="d-flex gap-2">
                            <input id='iestado' type="radio" name='opcao' onChange={() => setCampo('estado')} /> Estado
                        </div>
                    </ul>
                </div>
            </div>
        </>
    );
}
