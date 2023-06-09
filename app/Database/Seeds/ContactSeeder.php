<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $faker  = \Faker\Factory::create('id_ID');

        for($i = 1; $i <= 10; $i++){
            $data = [
                'name_contact'      => $faker->name,
                'telepon_contact'   => $faker->phoneNumber,
                'email_contact'     => $faker->freeEmail,
                'alamat_contact'    => $faker->address,
                'id_group'          => 1,
                'created_at'        => \CodeIgniter\I18n\Time::now(),
            ];
    
            $this->db->table('contacts')->insert($data);
        }
    }
}
