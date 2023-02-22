<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmpolyeeFormRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class EmployeeController extends Controller
{

    /**
    * データを登録します
    *
    * @param array $request
    *
    * @return RedirectResponse
    */
    public function employeeCreate(EmpolyeeFormRequest $request): RedirectResponse
    {
        $param = [
            'password' => bcrypt($request->password),
            'name' => $request->name,
            'sex' => $request->sex,
            'age' => $request->age,
            'address' => $request->address,
            'department' => $request->department,
            'division' => $request->division,
            'hire_date' => $request->hire_date,
        ];

        try {
            DB::table('workers')->insert($param);
            return redirect('/employee/create')->with('message', '登録が完了しました。');
        } catch (QueryException $e) {
            return redirect('/employee/create')->with('message', '登録に失敗しました。トップ画面に戻ります。');
        }
    }
}
