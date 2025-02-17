<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /* INDEX */
    
    /* SHOW */

    /* CREATE */

    /* STORE */

    /* UPDATE */

    /* DESTROY */

    /* MODAL */
    public function job_modal_data(Request $request){
        $job_data = Work::find($request->job_id);
        return response()->json([view('includes.job-modal-data', compact('job_data'))->render()]);
    }
}
