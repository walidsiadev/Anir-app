<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clients;
use App\bon_cmd;
use App\facture;
use App\fournisseur;
use App\lign_bcmd;
use App\lign_factur;
use App\produits;

class Ctlvue extends Controller
{
    public function Welcome()
    {
        return view('welcome');
    }
    public function Menuprincipal()
    {
        return view('Menuprincipal');
    }
    public function Produit()
    {
        return view('produit.index');
    }
    public function Fornisseur()
    {
        return view('fornisseur.index');
    }
    public function Clients()
    {
        $data = clients::all();
        return view('clients.index',['data'=>$data]);
    }
}
