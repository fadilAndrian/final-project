<?php
	namespace App\Models;
	use Illuminate\Support\Facades\DB;

	class PertanyaanModel{
		public static function get_all(){
			$pertanyaan = DB::table('questions')->get();
			return $pertanyaan;
		}

		
		
	}
	
?>