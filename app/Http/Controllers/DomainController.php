<?php

namespace App\Http\Controllers;

use App\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('form');
    }

    public function show($id)
    {
        $domain = Domain::find($id);
        return view('domain', ['domain' => $domain]);
    }

    public function store(Request $request)
    {
        $domain = new Domain();
        $domain->name = $request->input('url');
        $domain->save();
        return redirect()->route('domains.show', $domain->id);
    }

    public function showDomains()
    {
        $domains = Domain::all();
        return view('domains', ['domains' => $domains]);
    }
}
