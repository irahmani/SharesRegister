<?php
namespace App\Repositories;
use App\Models\Company;
use App\Interfaces\CompanyInterface;
class CompanyRepository implements CompanyInterface {
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