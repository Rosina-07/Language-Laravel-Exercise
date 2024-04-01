<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function all()
    {
        return response()->json([
            'message' => 'Languages Returned',
            'data' => Language::with('continent', 'difficulty', 'friends' )
                ->get()
                ->makeHidden([
                    'id', 'updated_at', 'created_at', 'difficulty_id', 'continent_id'])
                ]);
    }
}
