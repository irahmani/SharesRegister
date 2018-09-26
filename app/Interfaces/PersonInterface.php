<?php
namespace App\Interfaces;
use Illuminate\Http\Request;

interface PersonInterface {
    
    public function getAll();    
    public function find($id);    
    public function create($request);
    public function update($request, $id);
    public function delete($id);
}