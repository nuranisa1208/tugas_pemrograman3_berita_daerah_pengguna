<?php namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
	/**
	 *table name
	 */
	protected $table = "berita";
	
	/**
	 * allowed field
	 */
	 protected $allowedfields = [
		'judul',
		'tanggal',
		'isi'
	];
	
	public function getBerita()
	{
		return $this->findAll();
	}
	
	}
	?>