<?php
namespace App\Repositories;
use App\Models\Person;
use App\Interfaces\PersonInterface;
class PersonRepository implements PersonInterface {
    public function getAll() {
        return Company::all();
    }
    public function create($request) {
        return Company::create($request);
    }
    public function delete($id) {
        return Company::destroy($id);
    }
    public function update($request, $id) {
        return Company::where('id', $id)->update($request);
    }
    public function find($id) {
        return Company::find($id);
    }
}