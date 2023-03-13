<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\birthcertificate;
use App\identity;
use App\passport;
use App\drivinglicense;
use App\familyrestriction;
use App\divorcecertificate;
use App\deathcertificate;
use App\marriagecontract;
class services extends Controller
{

    public function __construct()
    { 
       $this->middleware('check_data');
    }
    public function bc_savedata(Request $req){
        $email=$req->session()->get('t_email');
        $req->validate([
            'bc_name'=>'required',
            'bc_id'=>'required|max:14',
            'bc_type'=>'required',
            'bc_gender'=>'required',
            'bc_mother'=>'required',
         ]);
        $bc=new birthcertificate;
        $bc->bc_name=$req->input('bc_name');
        $bc->bc_id=$req->input('bc_id');
        $bc->bc_type=$req->input('bc_type');
        $bc->t_email=$email;
        $bc->bc_gender=$req->input('bc_gender');
        $bc->bc_address=$req->input('bc_address');
        $bc->bc_phone=$req->input('bc_phone');
        $bc->bc_mother=$req->input('bc_mother');
        $bc->save();
        return redirect('checkout.bc_setting');
        }
        public function delete_bc(request $req){
           $t_delete_id=$req->input('t_delete_id');
           $t_email=$req->session()->get('t_email');
           $data=birthcertificate::where('bc_id','=',$t_delete_id)
           ->where('t_email','=',$t_email)->delete();
           return redirect('checkout.bc_setting');
    }
    public function bc_getdata(Request $req){
        $email=$req->session()->get('t_email');
        $data=birthcertificate::where('t_email',$email)->get();
        return view('checkout.bc_setting')->with('data',$data);
    }
    public function i_savedata(Request $req){
        $email=$req->session()->get('t_email');
        $req->validate([
    
            'i_name'=>'required',
            'i_id'=>'required|max:14',
            'i_type'=>'required',
            'i_gender'=>'required',
            'i_phone'=>'required|max:11',
            'i_address'=>'required',
            'i_photo'=>'required|mimes:jpeg,bmp,png',
            'i_photo2'=>'required|mimes:jpeg,bmp,png',
         ]);
        $i=new identity;
        $i->i_name=$req->input('i_name');
        $i->i_id=$req->input('i_id');
        $i->t_email=$email;
        $i->i_type=$req->input('i_type');  
        $i->i_gender=$req->input('i_gender');
        $i->i_phone=$req->input('i_phone');
        $i->i_address=$req->input('i_address');
        $i->i_photo=$req->file('i_photo')->store('Services_photos','public');
        $i->i_photo2=$req->file('i_photo2')->store('Services_photos','public');
        $i->save();
        return redirect('checkout.i_setting');
        }
        public function delete_i(request $req){
            $t_delete_id=$req->input('t_delete_id');
            $t_email=$req->session()->get('t_email');
            $data=identity::where('i_id','=',$t_delete_id)
            ->where('t_email','=',$t_email)->delete();
            return redirect('checkout.i_setting');
    }
    public function i_getdata(Request $req){
        $email=$req->session()->get('t_email');
        $data=identity::where('t_email',$email)->get();
        return view('checkout.i_setting')->with('data',$data);
    }
    public function p_savedata(Request $req){
        $email=$req->session()->get('t_email');
        $req->validate([
    
            'p_name'=>'required',
            'p_id'=>'required|max:14',
            'p_religion'=>'required',
            'p_gender'=>'required',
            'p_phone'=>'required|max:11',
            'p_address'=>'required',
            'p_work'=>'required',
            'p_photo'=>'required|mimes:jpeg,bmp,png',
            'p_photo2'=>'required|mimes:jpeg,bmp,png',
            'p_photo3'=>'required|mimes:jpeg,bmp,png',
         ]);
        $p=new passport;
        $p->p_name=$req->input('p_name');
        $p->p_id=$req->input('p_id');
        $p->t_email=$email;
        $p->p_religion=$req->input('p_religion');  
        $p->p_gender=$req->input('p_gender');
        $p->p_phone=$req->input('p_phone');
        $p->p_address=$req->input('p_address');
        $p->p_work=$req->input('p_work');
        $p->p_photo=$req->file('p_photo')->store('Services_photos','public');
        $p->p_photo2=$req->file('p_photo2')->store('Services_photos','public');
        $p->p_photo3=$req->file('p_photo3')->store('Services_photos','public');
        $p->save();
        return redirect('checkout.p_setting');
    }
        public function delete_p(request $req){
            $t_delete_id=$req->input('t_delete_id');
            $t_email=$req->session()->get('t_email');
            $data=passport::where('p_id','=',$t_delete_id)
            ->where('t_email','=',$t_email)->delete();
            return redirect('checkout.p_setting');
    }
    public function p_getdata(Request $req){
        $email=$req->session()->get('t_email');
        $data=passport::where('t_email',$email)->get();
        return view('checkout.p_setting')->with('data',$data);
    }
    public function dl_savedata(Request $req){
        $email=$req->session()->get('t_email');
        $req->validate([
    
            'dl_name'=>'required',
            'dl_id'=>'required|max:14',
            'dl_type'=>'required',
            'dl_address'=>'required',
            'dl_phone'=>'required|max:11',
            'dl_photo'=>'required|mimes:jpeg,bmp,png',
            'dl_photo2'=>'required|mimes:jpeg,bmp,png',
            'dl_photo3'=>'required|mimes:jpeg,bmp,png',

         ]);
        $dl=new drivinglicense;
        $dl->dl_name=$req->input('dl_name');
        $dl->dl_id=$req->input('dl_id');
        $dl->t_email=$email;
        $dl->dl_type=$req->input('dl_type');  
        $dl->dl_address=$req->input('dl_address');
        $dl->dl_phone=$req->input('dl_phone');
        $dl->dl_photo=$req->file('dl_photo')->store('Services_photos','public');
        $dl->dl_photo2=$req->file('dl_photo2')->store('Services_photos','public');
        $dl->dl_photo3=$req->file('dl_photo3')->store('Services_photos','public');
        $dl->save();
        return redirect('checkout.dl_setting');
    }
    public function delete_dl(request $req){
        $t_delete_id=$req->input('t_delete_id');
        $t_email=$req->session()->get('t_email');
        $data=drivinglicense::where('dl_id','=',$t_delete_id)
        ->where('t_email','=',$t_email)->delete();
        return redirect('checkout.dl_setting');
    }
        public function dl_getdata(Request $req){
        $email=$req->session()->get('t_email');
        $data=drivinglicense::where('t_email',$email)->get();
        return view('checkout.dl_setting')->with('data',$data);
    }
    public function fr_savedata(Request $req){
        $email=$req->session()->get('t_email');
        $req->validate([
            'fr_name'=>'required',
            'fr_id'=>'required|max:14',
            'fr_address'=>'required',
            'fr_phone'=>'required|max:11',
            'fr_photo'=>'required|mimes:jpeg,bmp,png',
            'fr_photo2'=>'required|mimes:jpeg,bmp,png',
            'fr_photo3'=>'required|mimes:jpeg,bmp,png',
         ]);
        $fr=new familyrestriction;
        $fr->fr_name=$req->input('fr_name');
        $fr->fr_id=$req->input('fr_id');
        $fr->t_email=$email;
        $fr->fr_address=$req->input('fr_address');  
        $fr->fr_phone=$req->input('fr_phone');
        $fr->fr_photo=$req->file('fr_photo');
        $fr->fr_photo2=$req->file('fr_photo2')->store('Services_photos','public');
        $fr->fr_photo3=$req->file('fr_photo3')->store('Services_photos','public');
        $fr->save();
        return redirect('checkout.fr_setting');
    }
    public function delete_fr(request $req){
        $t_delete_id=$req->input('t_delete_id');
        $t_email=$req->session()->get('t_email');
        $data=familyrestriction::where('fr_id','=',$t_delete_id)
        ->where('t_email','=',$t_email)->delete();
        return redirect('checkout.fr_setting');
    }
    public function fr_getdata(Request $req){
        $email=$req->session()->get('t_email');
        $data=familyrestriction::where('t_email',$email)->get();
        return view('checkout.fr_setting')->with('data',$data);
    }
    public function dc_savedata(Request $req){
        $email=$req->session()->get('t_email');
        $req->validate([
            'dc_name'=>'required',
            'dc_id'=>'required|max:14',
            'dc_wife'=>'required',
            'dc_wid'=>'required|max:14',
            'dc_address'=>'required',
            'dc_phone'=>'required|max:11',
            'dc_date'=>'required',
            'dc_photo'=>'required|mimes:jpeg,bmp,png',
         ]);
    $dc=new divorcecertificate;
    $dc->dc_name=$req->input('dc_name');
    $dc->dc_id=$req->input('dc_id');
    $dc->t_email=$email;
    $dc->dc_wife=$req->input('dc_wife');  
    $dc->dc_wid=$req->input('dc_wid');
    $dc->dc_address=$req->input('dc_address');
    $dc->dc_phone=$req->input('dc_phone');
    $dc->dc_date=$req->input('dc_date');
    $dc->dc_photo=$req->file('dc_photo')->store('Services_photos','public');
    $dc->save();
    return redirect('checkout.dc_setting');
   }
   public function delete_dc(request $req){
    $t_delete_id=$req->input('t_delete_id');
    $t_email=$req->session()->get('t_email');
    $data=divorcecertificate::where('dc_id','=',$t_delete_id)
    ->where('t_email','=',$t_email)->delete();
    return redirect('checkout.dc_setting');
    }
    public function dc_getdata(Request $req){
        $email=$req->session()->get('t_email');
        $data=divorcecertificate::where('t_email',$email)->get();
        return view('checkout.dc_setting')->with('data',$data);
    }
    public function ds_savedata(Request $req){
        $email=$req->session()->get('t_email');
        $req->validate([
            'ds_name'=>'required',
            'ds_id'=>'required|max:14',
            'ds_date'=>'required',
            'ds_address'=>'required',
            'ds_phone'=>'required',
            'ds_photo'=>'required|mimes:jpeg,bmp,png',
         ]);
    $ds=new deathcertificate;
    $ds->ds_name=$req->input('ds_name');
    $ds->ds_id=$req->input('ds_id');
    $ds->t_email=$email;
    $ds->ds_date=$req->input('ds_date');  
    $ds->ds_address=$req->input('ds_address');
    $ds->ds_phone=$req->input('ds_phone');
    $ds->ds_photo=$req->file('ds_photo')->store('Services_photos','public');
    $ds->save();
    return redirect('checkout.ds_setting');
    }
     public function delete_ds(request $req){
     $t_delete_id=$req->input('t_delete_id');
     $t_email=$req->session()->get('t_email');
     $data=deathcertificate::where('ds_id','=',$t_delete_id)
    ->where('t_email','=',$t_email)->delete();
    return redirect('checkout.ds_setting');
    }
    public function ds_getdata(Request $req){
        $email=$req->session()->get('t_email');
        $data=deathcertificate::where('t_email',$email)->get();
        return view('checkout.ds_setting')->with('data',$data);
    }
    public function mc_savedata(Request $req){
        $email=$req->session()->get('t_email');
        $req->validate([
            'mc_name'=>'required',
            'mc_id'=>'required|max:14',
            'mc_wife'=>'required',
            'mc_wid'=>'required|max:14',
            'mc_address'=>'required',
            'mc_phone'=>'required',
            'mc_photo'=>'required|mimes:jpeg,bmp,png',
         ]);
        $mc=new marriagecontract;
        $mc->mc_name=$req->input('mc_name');
        $mc->mc_id=$req->input('mc_id');
        $mc->t_email=$email;
        $mc->mc_wife=$req->input('mc_wife');  
        $mc->mc_wid=$req->input('mc_wid');
        $mc->mc_address=$req->input('mc_address');
        $mc->mc_phone=$req->input('mc_phone');
        $mc->mc_photo=$req->file('mc_photo')->store('Services_photos','public');
        $mc->save();
        return redirect('checkout.mc_setting');
        }
        public function delete_mc(request $req){
        $t_delete_id=$req->input('t_delete_id');
        $t_email=$req->session()->get('t_email');
        $data=marriagecontract::where('mc_id','=',$t_delete_id)
        ->where('t_email','=',$t_email)->delete();
        return redirect('checkout.mc_setting');
        }
        public function mc_getdata(Request $req){
            $email=$req->session()->get('t_email');
            $data=marriagecontract::where('t_email',$email)->get();
            return view('checkout.mc_setting')->with('data',$data); 
        }

}       