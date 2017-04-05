<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;


use Input;
use Request;
use DB;
use View;
use Redirect;
use Validator;


class CampaignController extends Controller
{
    public function store()
    {
         if(Request::isMethod('post'))
        {
            $data = Input::all();
            
            

            $rules = array(
            'nama_perusahaan'=>'required',
            'bidang' => 'required',
            'gambar' => 'required',
            'risk_rating' => 'required',
            'review'=>'required',
            'purchase'=>'required',
            'negara'=>'required',
            'target'=>'required',
            'funded'=>'required',
            'returns'=>'required',
            'tenor'=>'required',
            'deadline'=>'required',
            );
            $validation = Validator::make(Input::all(), $rules);
            if ($validation->fails())
             {
            alert()->error('Semua data harap diisi');
            //ganti dibawah ini mau redirect ke mana
             return Redirect::to('/')->withErrors($validation)->withInput();
             }

             else{
                 $data = Input::all();
                 $destinationPath = 'imguser'; // upload path
                 $extension = Input::file('gambar')-getClientOriginalExtens();// getting image extension
                 $fileName = rand(11111,99999).'.'.$extension; // renaming image
                 Input::file('gambar')->move($destinationPath, $fileName);
	             $foto=$destinationPath. '/'.$fileName;
	             $purchase=$data['purchase'];
	             $nama_perusahaan=$data['nama_perusahaan'];
	             $bidng=$data['bidang'];
	             //$gambar=$data['gambar'];
	             $risk_rating=$data['risk_rating'];
	             $review=$data['review'];
	             $negara=$data['negara'];
	             $target=$data['target'];
	             $funded=$data['funded']; 
	             $returns=$data['returns'];
	             $tenor=$data['tenor'];
	             $deadline=$data['deadline'];
             /*$sql="call sp_get_funded('$name','$email','$mobile','$company','$currency','$purchase','$far','$country','$industry','$year','$ear',,'$assets',,'$foto')";
             DB::connection()->getPdo()->exec($sql);
             DB::commit();*/
             alert()->success('get funded success');
             //edit yo redirect ke mana
             //return Redirect::to('/auth/login');

             }
                    

       
        }
    }
  public function update()
    {
         if(Request::isMethod('post'))
        {
            $data = Input::all();
            
            

            $rules = array(
            'nama_perusahaan'=>'required',
            'bidang' => 'required',
            'gambar' => 'required',
            'risk_rating' => 'required',
            'review'=>'required',
            'purchase'=>'required',
            'negara'=>'required',
            'target'=>'required',
            'funded'=>'required',
            'returns'=>'required',
            'tenor'=>'required',
            'deadline'=>'required',
            );
            $validation = Validator::make(Input::all(), $rules);
            if ($validation->fails())
             {
            alert()->error('Semua data harap diisi');
            //ganti dibawah ini mau redirect ke mana
             return Redirect::to('/')->withErrors($validation)->withInput();
             }

             else{
                 $data = Input::all();
                 $destinationPath = 'imguser'; // upload path
                 $extension = Input::file('gambar')-getClientOriginalExtens();// getting image extension
                 $fileName = rand(11111,99999).'.'.$extension; // renaming image
                 Input::file('gambar')->move($destinationPath, $fileName);
	             $foto=$destinationPath. '/'.$fileName;
	             $purchase=$data['purchase'];
	             $nama_perusahaan=$data['nama_perusahaan'];
	             $bidng=$data['bidang'];
	             //$gambar=$data['gambar'];
	             $risk_rating=$data['risk_rating'];
	             $review=$data['review'];
	             $negara=$data['negara'];
	             $target=$data['target'];
	             $funded=$data['funded']; 
	             $returns=$data['returns'];
	             $tenor=$data['tenor'];
	             $deadline=$data['deadline'];
             /*$sql="call sp_get_funded('$name','$email','$mobile','$company','$currency','$purchase','$far','$country','$industry','$year','$ear',,'$assets',,'$foto')";
             DB::connection()->getPdo()->exec($sql);
             DB::commit();*/
             alert()->success('get funded success');
             //edit yo redirect ke mana
             //return Redirect::to('/auth/login');

             }
                    

       
        }
    }
}
