<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Person;
use App\Repositories\PersonRepository;
class PersonController extends Controller {
    /**
     * The Person repository instance
     * 
     * @var PersonRepository
     */
    protected $persons;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a list of all persons.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $persons = $this->persons->getAll();
        return view('persons.index', compact('persons'));
    }
    /**
     * Display a form to create a new Person.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('persons.create');
    }
    /**
     * Create a new Person.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->persons->create($request->all());
        return redirect('/persons');
    }
    /**
     * Display an Person
     * 
     * @param type $id
     * @return type
     */
    public function show($id) {
        $Person = $this->persons->find($id);
        return view('persons.show', compact('Person'));
    }
    /**
     * Display a form to edit an Person.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        return $id;
        $Person = $this->persons->find($id);
        return view('persons.edit', compact('Person'));
    }
    /**
     * Update an Person.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->persons->update($request->all(), $id);
        return redirect('/persons');
    }
    /**
     * Delete an Person
     * 
     * @param type $id
     * @return \Illuminate\Http\Response
     */
    public function destory($id) {
        $this->persons->delete($id);
        return redirect('/persons');
    }
}