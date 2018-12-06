<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class CmsUserAdd{
    public static function userAdd($request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users',
            'email' => 'required|unique:users'
        ],[
            'name.required' => 'Vui lòng nhập tên',
            'name.unique' => 'Vai trò đã tồn tại',
            'email.required' => 'Vui lòng nhập tên',
            'email.unique' => 'Vai trò đã tồn tại'
        ]);
        if($validator->fails()) {
            return [$validator->errors(), $request->all()];
        }   else    {
            DB::table('users')->insert([
                'name' => $request->name,
                'id_user_role' => $request->role,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => bcrypt($request->password),
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            return 0;
        }
    }
}