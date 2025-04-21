import React from 'react';
import { Modal, Button } from 'react-bootstrap';
import { router } from '@inertiajs/react';

export default function ConfirmDeleteModal({ show, onClose, contactId }) {
    const handleConfirm = () => {
        if (contactId) {
            router.delete(`/contacts/${contactId}/delete`, {
                onSuccess: () => {
                    onClose(); // fecha o modal após deletar
                },
            });
        }
    };
    return (
        <Modal show={show} onHide={onClose} centered>
            <Modal.Header closeButton>
                <Modal.Title>Confirmar exclusão</Modal.Title>
            </Modal.Header>
            <Modal.Body>
                Tem certeza que deseja excluir este contato?
            </Modal.Body>
            <Modal.Footer>
                <Button variant="secondary" onClick={onClose}>
                    Cancelar
                </Button>
                <Button variant="danger" onClick={handleConfirm}>
                    Confirmar
                </Button>
            </Modal.Footer>
        </Modal>
    );
}