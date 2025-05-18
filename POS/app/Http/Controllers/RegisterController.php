<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            $rules = [
                'nama' => 'required|string',
                'username' => 'required|string|max:255|unique:m_user,username', // pastikan ini sesuai nama tabel
                'password' => 'required|string|min:6|confirmed',
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => $validator->errors()->first(),
                    'msgField' => $validator->errors(),
                ]);
            }

            UserModel::create([
                'level_id' => 3,
                'nama' => $request->nama,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);

            return response()->json([
                'status' => true,
                'message' => 'silahkan login dengan akun yang sudah didaftarkan',
                'redirect' => url('login'),
            ]);
        }

        return redirect('login');
    }
}
