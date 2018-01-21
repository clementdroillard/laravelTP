<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoControllers extends Controller
{

     public function index()
    {
        return json_encode(DB::select('select id,libelle,valider from saisie'));
    }

    public function maxID()
    {
        return json_encode(DB::select('SELECT MAX(id) AS max FROM saisie'));
    }

    public function delete($id)
    {
    	return json_encode(DB::delete('DELETE FROM saisie WHERE id = ? ',[$id]));
    }

    public function valider($id,$valider)
 	{
 		return json_encode(DB::update('UPDATE saisie SET valider = ? WHERE id = ? ', [$valider,$id]));
 	}

 	public function update($id,$value)
 	{
 		return json_encode(DB::update('UPDATE saisie SET libelle = ? WHERE id = ? ', [urldecode($value),$id]));
 	}
    
    public function addOne($value)
    {
    	return json_encode(DB::insert('INSERT INTO saisie(libelle,valider) VALUES(?,false)', [urldecode($value)]));		    
    }
}
