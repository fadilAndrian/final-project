<?php
	namespace App\Models;
	use Illuminate\Support\Facades\DB;

	class PertanyaanModel{
		public static function get_all(){
			$pertanyaan = DB::table('questions')->get();
			return $pertanyaan;
		}

		public static function save($data){
			unset($data["_token"]);
			$new_pertanyaan = DB::table('questions')->insert($data);
			return $new_pertanyaan;
		}
		public static function find_by_id($id){
			$pertanyaan = DB::table('questions')->where('id', $id)->first();
			return $pertanyaan;
		}

		public static function update($id, $request){
			$pertanyaan = DB::table('questions')
			->where('id', $id)
			->update(['judul'=>$request["judul"],
							'isi'=>$request["isi"],
							'tanggal_dibuat'=>$request["tanggal_dibuat"],
							'tanggal_diperbaharui'=>$request["tanggal_diperbaharui"]]);
		}
		public static function destroy($id){
			$deleted = DB::table('questions')->where('id', $id)->delete();
			return $deleted;
		}
	}
	
?>