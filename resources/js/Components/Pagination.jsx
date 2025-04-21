import React from 'react';
import { Link } from '@inertiajs/react';

export default function Pagination({ links }) {
    return (
        <nav aria-label="Page navigation" className="mt-4">
            <ul className="pagination justify-content-center w-100 d-flex flex-wrap gap-1">
                {links.map((link, index) => (
                    <li
                        key={index}
                        className={`page-item ${link.active ? 'active' : ''} ${!link.url ? 'disabled' : ''}`}
                    >
                        <Link
                            className="page-link"
                            href={link.url || '#'}
                            dangerouslySetInnerHTML={{ __html: link.label }}
                            style={{
                                backgroundColor: link.active ? '#157347' : '',
                                borderColor: link.active ? '#157347' : '',
                                color: link.active ? 'white' : '',
                            }}
                        />
                    </li>
                ))}
            </ul>
        </nav>
    );
}
