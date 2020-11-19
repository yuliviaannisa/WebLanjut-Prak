<?php namespace App\Database\Seeds;

class DramaSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                    [
                        'nama_drama' => 'Reply 1988',
                        'deskripsi_drama'    => 'Family, Friendship, and Romance'
                    ],
                    [
                        'nama_drama' => 'Start Up',
                        'deskripsi_drama'    => 'TIM HAN JI PYEONG'
                    ],
                ];

                // Simple Queries
                $this->db->query("INSERT INTO drama (nama_drama, deskripsi_drama) VALUES(:username:, :email:)",
                        $data
                );

                // Using Query Builder
                $this->db->table('drama')->insertBatch($data);
        }
}