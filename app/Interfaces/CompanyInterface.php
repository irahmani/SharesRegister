<?php
namespace App\Interfaces;
use Illuminate\Http\Request;

interface CompanyInterface {
    
    public function getAll();    
    public function find($id);    
    public function create($request);
    public function update($request, $id);
    public function delete($id);
}