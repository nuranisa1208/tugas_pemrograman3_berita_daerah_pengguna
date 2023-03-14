<?php namespace App\Models;

use CodeIgniter\Model;

class penggunaModel extends Model
{
	/**
	 *table name
	 */
	protected $table = "pengguna";
	
	/**
	 * allowed field
	 */
	 protected $allowedfields = [
		'id_pengguna',
		'email',
		'nama',
		'verifikasi'
	];
	
	public function getPengguna()
	{
		return $this->findAll();// select * from pengguna
	}
	
	}
	?>