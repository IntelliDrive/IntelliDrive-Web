<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use DB;
use Response;

class MileController extends Controller
{
    /**
     * Public API used to get a users trip data.
     *
     * @param $token: POST variable of the user login token.
     * @return returns JSON array of all the users trips.
     */
    public function getall()
    {
        $token = Input::get('token');

        try {
            $trips = DB::select('select t.* from IntelliDrive.trip_data t JOIN IntelliDrive.users u On u.email = t.email WHERE u.app_token = ?;',[$token]);
            return Response::json($trips, 200);
        } catch (Exception $e) {
            return Response::json(['msg' => 'Failed to Get Trip Data'], 400);
        }
    } 

    /**
     * Public API used to get a users trip data of a certain type.
     *
     * @param token: POST variable of the user login token.
     * @param $type: passed from Routes, the type of trips to get data for.
     * @return returns JSON array of all the users trips.
     */ 
    public function get($type)
    {
        $token = Input::get('token');

        try {
            $trips = DB::select('select t.* from IntelliDrive.trip_data t JOIN IntelliDrive.users u On u.email = t.email WHERE u.app_token = ? AND t.type = ?;',[$token, $type]);
            return Response::json($trips, 200);
        } catch (Exception $e) {
            return Response::json(['msg' => 'Failed to Get Trip Data'], 400);
        }
    }

    /**
     * Public API used to close last trip and start a new one.
     *
     * @param $token: POST variable of the user login token.
     * @param $type: passed from Routes, the type of trips to get data for.
     * @param $name: name of new trip.
     * @return returns JSON message of fail/success.
     */ 
    public function newtrip($type, $name)
    {
        $token = Input::get('token');

        try {
            $responce = DB::update('update trip_data set end = current_timestamp where email=(SELECT email from users where app_token = ?) ORDER BY trip_number DESC LIMIT 1;', [$token]);
            $responce = DB::insert('INSERT INTO trip_data (trip_name, email, type, miles) VALUES (? ,(SELECT email from users where app_token=?), ?, 0);',[$name, $token, $type]);
            return Response::json(['msg' => 'Generated new Trip'], 200);
        } catch (Exception $e) {
            return Response::json(['msg' => 'Failed to Generate new Trip'], 400);
        }
    }

    /**
     * Public API used to add miles to the current trip.
     *
     * @param token: POST variable of the user login token.
     * @param $miles The miles to add to the current trip
     * @return returns JSON message of fail/success
     */ 
    public function add($miles)
    {
        $token = Input::get('token');

        try {
            $responce = DB::update('UPDATE trip_data SET miles=miles+? WHERE email=(SELECT email FROM users where app_token=?) AND end=0;',[$miles, $token]);
            return Response::json(['msg' => 'Added Miles'], 200);
        } catch (Exception $e) {
            return Response::json(['msg' => 'Failed to Add Miles'], 400);
        }

    }

}
