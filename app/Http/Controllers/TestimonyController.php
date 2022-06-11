<?php

namespace App\Http\Controllers;

use App\Models\testimony;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    public function fetchTestimony()
    {
        return testimony::orderBy('created_at', 'DESC')->paginate('20');
    }
}
