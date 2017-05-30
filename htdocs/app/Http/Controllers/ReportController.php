<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $inc_exp_sub = DB::table('subject')
        ->leftJoin('inc_exp', 'sub_name', '=', 'subject')        
        ->orderBy('income','desc')
        ->orderBy('expense','desc')
        ->orderBy('sub_type','asc')        
        ->select('id_inc_exp','sub_name','sub_cat','sub_type','income','expense','date','entry_date')
        //->whereBetween('entry_date', ['2017/05/01', '2017/05/31'])
        ->get()
        ->groupBy('sub_cat');

        $result = array();

        foreach ($inc_exp_sub as $sub_cat => $sub_cat_list) {
            $result[$sub_cat]=$sub_cat_list->groupBy('sub_type');

            foreach ($result[$sub_cat] as $sub => $sub_entry) {
                $result[$sub_cat][$sub]=$sub_entry->groupBy('sub_name');

                foreach ($result[$sub_cat][$sub] as $ind_sub => $ind_sub_list) {
                    $result[$sub_cat][$sub][$ind_sub]=$ind_sub_list;
                }
            }
        }
        return $result;
    }

    public function show()
    {
        return view('report');
    }
}
