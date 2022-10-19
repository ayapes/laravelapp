<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {

        $items = Person::all();
        // ddd($items);
        return view('person.index', ['items' => $items]);
    }

    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = new Person;
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }

    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }

    public function search(Request $request)
    {
        // findメソッドは「ID検索専用」でございます。
        // $item = Person::find($request->input);

        // 名前などで検索する場合はWHERE句でします。
        $item = Person::where('name', $request->input)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }

    public function edit(Request $request){
        $person = Person::find($request->id);
        return view('person.edit',['form' => $person]);
    }

    public function update(Request $request){
        $this->validate($request,Person::$rules);
        $person = Person::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }
}
