<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * Listagem 1
         */

        // $country = DB::select('select *from categories');
        // return $country;

        /**
         * Listagem 2
         */

        // $country = DB::select('select *from categories where id= ?', [1]);
        // return $country;


        /**
         * Listagem 3
         */

        // $country = DB::select(
        //     "select *from categories where id = :id and name = :name ",
        //         [
        //             'id' => 1,
        //             'name' => 'Lessie Rodriguez'
        //         ]);

        // return $country;

        /**
         * Listagem 4
         */

        // $country = DB::table('categories')->get();

        // return $country;


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * Insert 1
         */

         $insertCountry = DB::insert('insert into categories(name) values (:name)',[$request->input('name')]);
         return response()->json(['data' => $insertCountry]);

        /**
         * Insert 2
         */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        /**
         * Update 1
         */

         //$countryUpdate = DB::update("update categories set name='".$request->input('name')."' where id=$id");
        //  return $countryUpdate;

        /**
         * Update 2
         */

        // $countryUpdate = DB::update("update categories set name=? where id=?",
        //     [$request->input('name'), $id]
        // );

        // return $countryUpdate;

        /**
         * Update 3
         */

        // $countryUpdate = DB::update("update categories set name= :name where id= :id",
        //     [
        //         'name' => $request->input('name'),
        //         'id' =>$id
        //     ]
        // );

        // return $countryUpdate;



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return DB::delete('delete from categories where id = :id', ['id' => $id]);
    }


}
