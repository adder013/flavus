<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitController extends Controller
{
    public function branchCheckout(request $request)
    {
        if ($request->branch)
        {
            $gitVersion = shell_exec("git checkout $request->branch");
            return response()->json($gitVersion, 200);
        }
        else
        {
            return response()->json($gitVersion, 404);
        }
    }
}
