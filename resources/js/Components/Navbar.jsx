import React from "react";
import { Link } from "@inertiajs/react";
import { router } from '@inertiajs/react';

export default function Navbar(){

    

    return (
        <>
            <nav className='d-flex align-items-center justify-content-between bg-light ps-4 pe-4'>
                <img src="https://libresolucoes.com.br/wp-content/uploads/2021/12/Logo-Libre-e1733439272324.png" alt="" style={{width: '100px'}}/>
                <ul className='d-flex align-items-center m-0'>
                        <button onClick={()=>{
                            router.get('/cadastro')
                        }} className='btn btn-success'>Novo contato</button>
                    
                </ul>
            </nav>
        </>
    )
}