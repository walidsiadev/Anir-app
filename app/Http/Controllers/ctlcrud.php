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

class ctlcrud extends Controller
{
    public function Addclient(Request $request)
    {
        $singl = null;
        $data = clients::all();
        if($request->input('id')== null){
            $client = clients::find($request->input('id'));
        }else{
            $client = new clients();
            $client->nom = $request->input('nom');
            $client->discription = $request->input('description');
            $client->save();
        }
        return redirect('\clients');
    }
}
