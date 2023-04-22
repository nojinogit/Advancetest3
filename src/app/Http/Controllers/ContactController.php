<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Pagination\Paginator;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }

    public function confirmation(ContactRequest $request){
        $contacts=$request->only(['name1','name2','gender','email','address','building_name','opinion']);
        $postcode=$request->only(['postcode']);
        $contacts['postcode']=mb_convert_kana($postcode['postcode'], "Kha");
        $name=$request->only(['name1','name2']);
        $contacts['fullname']=join("",$name);
        return view('/confirmation',compact('contacts'));
    }

    public function store(Request $request){
        $contacts=$request->all();
        Contact::create($contacts);
        return view('/thanks');
    }

    public function management(){
        return view('/management');
    }

    public function search(Request $request){
        $contacts=Contact::
            FullnameSearch($request->fullname)->GenderSearch($request->gender)->StartDateSearch($request->startDate)->EndDateSearch($request->endDate)->EmailSearch($request->email)->Paginate(10);
        return view('/management',compact('contacts'));
    }

    public function delete(Request $request){
        Contact::find($request->id)->delete();
        return redirect('/management');
    }
}
