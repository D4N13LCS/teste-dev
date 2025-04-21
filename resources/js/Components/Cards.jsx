import React from "react";
import { FaUser, FaPhone,FaHashtag, FaBirthdayCake, FaHome } from 'react-icons/fa';
import { useState } from "react";
import { router } from '@inertiajs/react';

import ConfirmDeleteModal from '@/Components/ConfirmDeleteModal';


export default function Cards({contacts}){
    const [showModal, setShowModal] = useState(false);
    const [contactToDelete, setContactToDelete] = useState(null);
    const [showAddress, setShowAddress] = useState(false)

    const openModal = (id) => {
        setContactToDelete(id);
        setShowModal(true);
    };
    
    const mostrar_endereco = (evt, indice)=>{
        const AddressModal = document.getElementsByClassName('address')[indice]

        setShowAddress(!showAddress)

        evt.target.innerText = !AddressModal.classList.contains('d-flex')?'Minimizar endereço':'Exibir endereço';

        AddressModal.classList.contains('d-flex')?AddressModal.classList.replace('d-flex', 'd-none'):AddressModal.classList.replace('d-none', 'd-flex')
    }

    

    return (
        <>
        <ConfirmDeleteModal show={showModal} onClose={()=>{
                setShowModal(false)
            }} contactId={contactToDelete}/>
            <section id="contato" className="d-flex flex-column justify-content-center align-items-center gap-4">
                {
                    contacts.data.map((contact, i)=>{
                        return <div key={i} className="card" style={{width: '24rem'}}>
                        <div className="card-body">
                            <div className="d-flex flex-column gap-4">
                                <section className='d-flex flex-column gap-2'>
                                    <div className="campo d-flex align-items-center gap-2">
                                        <FaHashtag />
                                        <input className="w-100" type="text" value={contact.id}/>
                                    </div>
                                    <div className="campo d-flex align-items-center gap-2">
                                        <FaUser />
                                        <input className="w-100" type="text" value={contact.nome}/>
                                    </div>
                                    <div className="campo d-flex align-items-center gap-2">
                                        <FaPhone/>
                                        <input className="w-100" type="text" value={contact.telefone}/>
                                    </div>
                                    <div className="campo d-flex align-items-center gap-2">
                                        <FaBirthdayCake/>
                                        <input className="w-100" type="text" value={contact.idade}/>
                                    </div>
                                </section>
                                <section className='address d-none flex-column gap-2'>
                                <div className="d-flex align-items-center gap-3">
                                <FaHome size={24}/>
                                    <h1 className="">Endereço</h1>
                                </div>
                                <div className="campo d-flex align-items-center gap-2">
                                        <p className='m-0' >CEP:</p>
                                        <input className="w-100" type="text" value={contact.cep}/>
                                    </div>
                                <div className="campo d-flex align-items-center gap-2">
                                        <p className='m-0' >Rua:</p>
                                        <input className="w-100" type="text" value={contact.rua}/>
                                    </div>
                                <div className="campo d-flex align-items-center gap-2">
                                        <p className='m-0' >Número:</p>
                                        <input className="w-100" type="text" value={contact.numero}/>
                                    </div>
                                <div className="campo d-flex align-items-center gap-2">
                                    <p className='m-0' >Complemento:</p>
                                        <input className="w-100" type="text" value={contact.complemento}/>
                                    </div>
                                <div className="campo d-flex align-items-center gap-2">
                                    <p className='m-0' >Cidade:</p>
                                        <input className="w-100" type="text" value={contact.cidade}/>
                                    </div>
                                <div className="campo d-flex align-items-center gap-2">
                                    <p className='m-0' >Estado:</p>
                                        <input className="w-100" type="text" value={contact.estado}/>
                                    </div>
                                </section>
                                
                                <section id="buttons" className='d-flex flex-column gap-1'>
                                    <button href="#" className=" btn btn-dark" onClick={(evt)=>{mostrar_endereco(evt, i)}}>Exibir endereço</button>
                                    <button onClick={()=>{router.get(`/edit/?id=${contact.id}&nome=${contact.nome}&idade=${contact.idade}&telefone=${contact.telefone}&cep=${contact.cep}&rua=${contact.rua}&numero=${contact.numero}&complemento=${contact.complemento}&estado=${contact.estado}&cidade=${contact.cidade}`)}} href="#" className="btn btn-primary">Editar</button>
                                    <button href="#" className="btn btn-danger" onClick={()=>{openModal(contact.id)}}>Deletar</button>
                                </section>
                            </div>
                        </div>
                        </div>    
                    })
                    
                }
                

            </section>
           
        </>
    )
}