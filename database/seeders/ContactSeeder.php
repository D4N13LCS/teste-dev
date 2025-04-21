<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'nome' => 'Maria Silva',
                'telefone' => '(11) 91234-5678',
                'idade' => 28,
                'cep' => '01001-000',
                'rua' => 'Rua das Flores',
                'numero' => '123',
                'complemento' => 'Apto 12',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
            ],
            [
                'nome' => 'João Pereira',
                'telefone' => '(21) 98765-4321',
                'idade' => 35,
                'cep' => '20040-010',
                'rua' => 'Av. Atlântica',
                'numero' => '456',
                'complemento' => 'Cobertura',
                'cidade' => 'Rio de Janeiro',
                'estado' => 'RJ',
            ],
            [
                'nome' => 'Arthur Silva',
                'telefone' => '(21) 97564-9321',
                'idade' => 21,
                'cep' => '30410-014',
                'rua' => 'Av. Roberto Silveira',
                'numero' => '75',
                'complemento' => 'lt-23',
                'cidade' => 'Rio Grande do Sul',
                'estado' => 'RS',
            ],
            [
                'nome' => 'Pietra Martins',
                'telefone' => '(21) 99563-9720',
                'idade' => 26,
                'cep' => '10211-013',
                'rua' => 'Rua B. Castro',
                'numero' => '4',
                'complemento' => 'qd-25',
                'cidade' => 'Rio Grande do Norte',
                'estado' => 'RN',
            ],
           
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }

    }
}
