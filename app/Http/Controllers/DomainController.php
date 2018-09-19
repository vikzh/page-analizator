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
        $domain = new Domain();

        $inputUrl = $request->input('url');
        $client = new Client(['base_uri' => $inputUrl]);
        $response = $client->request('GET', '');
        if ($response->hasHeader('Content-Length')) {
            $domain->contLength = $response->getHeader('Content-Length')[0];
        }
        $domain->status = $response->getReasonPhrase();
        $domain->code = $response->getStatusCode();
        $domain->body = $response->getBody()->read(65500);
        $domain->name = $inputUrl;
        $domain->save();
        return redirect(route('domains.show', ['id' => $domain->id]));
    }

    public function showDomains()
    {
        $domains = Domain::paginate(10);
        return view('domains', ['domains' => $domains]);
    }
}
