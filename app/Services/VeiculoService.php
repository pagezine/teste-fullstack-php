<?php
    namespace App\Services;

    use App\Models\Carros;

    class VeiculoService
    {
        public function get($id = null) 
        {
            if ($id) {
                return Carros::select($id);
            } else {
                return Carros::selectAll();
            }
        }

        public function post() 
        {
            $data = $_POST;

            return Carros::insert($data);
        }

        public function update() 
        {
            
        }

        public function delete() 
        {
            
        }
    }