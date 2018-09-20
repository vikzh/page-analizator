<?php

namespace App\Http\Controllers;

use App\Domain;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
        $client = new Client();
        $response = $client->get($request->input('url'));
        $contLength = $response->hasHeader('Content-Length') ?
                    $response->getHeader('Content-Length')[0] : 0;

        $domain = Domain::create(['name' => $request->input('url'),
            'status' => $response->getReasonPhrase(),
            'code' => $response->getStatusCode(),
            'contLength' => $contLength,
            'body' => $response->getBody()->read(65500)
        ]);
        return redirect(route('domains.show', ['id' => $domain->id]));
    }

    public function showDomains()
    {
        $domains = Domain::paginate(10);
        return view('domains', ['domains' => $domains]);
    }
}
