<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {   
        $company= new Company();

        return $company->all();

    }

    public function create(Request $request)
    {
        DB::insert('SELECT INTO company ($request) VALUES (:$request)', [
            'name' => $request
        ]);
        return view('company.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        //dump($data);
        return view('Company/store');

    }

    public function show(Request $request)
    {
        // $method = $request->url();
        // echo "URL ".$method;
        // dump('show');
        return view('Company/show');
    }

    public function edit()
    {
        dump('edit');
    }

    public function update()
    {
        dump('update');
    }

    public function destroy(Request $request)
    {
        $method = $request->url();
        echo "URL ".$method;
        dump('destroy');
    }
}
