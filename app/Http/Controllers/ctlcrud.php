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
    public $ok = ['status'=> 'ok'];
    public $err = ['status'=> 'nok'];

    public function Addclient(Request $request){
        try {
            if ($request->input('nom') == '' && $request->input('description') == '') {
                return response($this->err);
            }
            $data = clients::all();
            $client = new clients();
            $client->nom = $request->input('nom');
            $client->discription = $request->input('description');
            if ($client->save()) {
                return response($this->ok);
            }else {
                return response($this->err);
            }
        } catch (\Throwable $th) {
            return response($this->err);
        }
    }
    public function UpdateClient(Request $request){
         try {
            if ($request->input('id') == '' && $request->input('nom') == '' && $request->input('description') == '') {
                return response($this->err);
            }
            $client = clients::find($request->input('id'));
            $client->nom = $request->input('nom');
            $client->discription = $request->input('description');
            if ($client->save()) {
                return response($this->ok);
            }else {
                return response($this->err);
            }

        } catch (\Throwable $th) {
           return response($this->err);
        }
    }    
    public function Suprimerclient(Request $request){
         try {
            if ($request->input('id') == '') {
                return response($this->err);
            }
            $client = clients::find($request->input('id'));
            if ($client->delete()) {
                return response($this->ok);
            }else {
                return response($this->err);
            }
        } catch (\Throwable $th) {
           return response($this->err);
        }
    }

    public function Addforn(Request $request){
        try {
            if ($request->input('nom') == '' && $request->input('discription') == '' && $request->input('presentant') == '') {
                return response($this->err);
            }
            $data = clients::all();
            $client = new clients();
            $client->nom = $request->input('nom');
            $client->discription = $request->input('discription');
            $client->presentant = $request->input('presentant');
            if ($client->save()) {
                return response($this->ok);
            }else {
                return response($this->err);
            }
        } catch (\Throwable $th) {
            return response($this->err);
        }
    }
    public function Updateforn(Request $request){
         try {
            if ($request->input('id') == '' && $request->input('nom') == '' && $request->input('description') == '') {
                return response($this->err);
            }
            $client = clients::find($request->input('id'));
            $client->nom = $request->input('nom');
            $client->discription = $request->input('mdiscription');
            $client->presentant = $request->input('mpresentant');
            if ($client->save()) {
                return response($this->ok);
            }else {
                return response($this->err);
            }

        } catch (\Throwable $th) {
           return response($this->err);
        }
    }    
    public function Suprimerforn(Request $request){
         try {
            if ($request->input('id') == '') {
                return response($this->err);
            }
            $client = clients::find($request->input('id'));
            if ($client->delete()) {
                return response($this->ok);
            }else {
                return response($this->err);
            }
        } catch (\Throwable $th) {
           return response($this->err);
        }
    }
}
