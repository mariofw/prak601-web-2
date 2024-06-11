<?php
namespace App\Database\Seeds; use CodeIgniter\Database\Seeder; class UserSeeder extends Seeder
{
public function run()
{
$this->db->table('user')->insert([ 'username' => 'admin',
'email' => 'admin@mail.com',
'password' => password_hash('12345678', PASSWORD_DEFAULT),
]);
}
}
