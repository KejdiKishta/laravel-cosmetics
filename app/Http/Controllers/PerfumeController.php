<?php

namespace App\Http\Controllers;

use App\Models\Perfume;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Perfume::all());
    }
}
