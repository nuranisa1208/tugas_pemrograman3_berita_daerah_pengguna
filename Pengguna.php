<?php
namespace App\Controllers;
use App\Models\penggunaModel;

class pengguna extends BaseController
{
	/**
	 * index function
	 */
	 public function index()
	 {
		//model initialize
		$Penggunas = new penggunaModel();
		$pager = \Config\Services::pager();
		
		$data = array (
		'pengguna' => $Penggunas ->paginate(2, 'pengguna'),
		'pager'=>$Penggunas->pager
		);
		
		
		return view('pengguna',$data);
	 }
	}