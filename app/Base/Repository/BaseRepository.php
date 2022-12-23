<?php

namespace App\Base\Repository;

use Exception;
use Illuminate\Support\Facades\DB;

class BaseRepository
{   
    /**
     * getById
     *
     * @param  mixed $id
     * @return array
     */
    public static function getById(int $id, string $table) {
        try {
            $datas = DB::table($table)->where("id", "=", $id)->get();
            return $datas;
        } catch(Exception $e) {
            DB::rollBack();
            return false;
        }
    }
    
    /**
     * display
     *
     * @param  mixed $table
     * @return void
     */
    public static function display(string $table) {
        try {
            $datas = DB::table($table)->get();
            return $datas;
        } catch(Exception $e) {
            DB::rollBack();
            return false;
        }
    }
    
    /**
     * store
     *
     * @param  mixed $datas
     * @param  mixed $table
     * @return void
     */
    public static function store(array $datas, string $table) {
        DB::beginTransaction();
        try {
            if(empty($datas)) {
                return response()->json("Data empty", 200);
            }
            $id = DB::table($table)->insertGetId($datas);
           
            DB::commit();
            return $id;
        } catch(Exception $e) {
            DB::rollBack();
            return false;
        }
    }
    
    /**
     * update
     *
     * @param  mixed $datas
     * @param  mixed $table
     * @param  mixed $id
     * @param  mixed $field
     * @return void
     */
    public static function update(array $datas, string $table, mixed $id, string $field) {
        DB::beginTransaction();
        try {
            if(empty($datas)) {
                return response()->json("Data empty", 200);
            }
            DB::table($table)->where($field, $id)->update($datas);
            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();
            return false;
        }
    }
        
    /**
     * delete
     *
     * @param  mixed $table
     * @param  mixed $field
     * @param  mixed $operator
     * @param  mixed $value
     * @return void
     */
    public static function delete(string $table, string $field, string $operator, $value) {
        DB::beginTransaction();
        try {
            DB::table($table)->where($field, $operator, $value)->delete();
            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();
            return false;
        }
        
    }
}