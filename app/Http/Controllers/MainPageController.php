<?php

namespace App\Http\Controllers;

use App\Models\customer_table;
use App\Models\reservation_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('car_tables')
            ->leftJoin('class_tables','car_tables.class_id', '=', 'class_tables.id')
            ->select('car_tables.*','class_tables.price','class_tables.min_age')
            ->get();

        return view('index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email = $request->input('email-address');

        $check = DB::table('customer_tables')
            ->where('email', '=', $email)
            ->count();

        if($check > 0){
            $customer_id = DB::table('customer_tables')
                ->select('id')
                ->where('email', '=', $email)
                ->get('id');
            $reserve = reservation_table::create([
                'car_id' => $request->input('selected-car'),
                'customer_id' => $customer_id[0]->id,
                'pick_up_location' => $request->input('pickup-location'),
                'drop_off_location' => $request->input('dropoff-location'),
                'pick_up_time' => $request->input('pick-up'),
                'drop_off_time' => $request->input('drop-off')
            ]);


            return redirect('/');

        } else {
            $customer_create = customer_table::create([
                'first_name' => $request->input('first-name'),
                'last_name' => $request->input('last-name'),
                'phone_number' => $request->input('phone-number'),
                'email' => $request->input('email-address'),
                'age' => $request->input('age'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'zip_code' => $request->input('zip-code')
            ]);
            $customer_id = $customer_create['id'];
            $reserve = reservation_table::create([
                'car_id' => $request->input('selected-car'),
                'customer_id' => $customer_id,
                'pick_up_location' => $request->input('pickup-location'),
                'drop_off_location' => $request->input('dropoff-location'),
                'pick_up_time' => $request->input('pick-up'),
                'drop_off_time' => $request->input('drop-off')
            ]);
            return redirect('/');
        }
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
