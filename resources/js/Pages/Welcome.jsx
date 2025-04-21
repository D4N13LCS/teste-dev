import React from 'react';
import { Head, Link } from '@inertiajs/react';
import Navbar from '@/Components/Navbar';
import FilterContacts from '@/Components/FilterContact';
import Cards from '@/Components/Cards';
import Pagination from '@/Components/Pagination';

export default function Welcome({contacts}) {
    return (
        <>
            <Head title='Home'/>
            <Navbar/>
            <FilterContacts/>
            <Cards contacts={contacts}/>
            <Pagination links={contacts.links}/>
        </>
    );
}
