<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
                    'party' => 'required|exists:political_parties,name',
                    'token' => 'required|string',
                ]);
        $tokens = \App\Models\Tokens::all()->pluck('token')->toArray();
        if (!in_array($validated['token'], $tokens)) {
            return redirect()->back()->withErrors(['token' => 'Invalid or already used token.']);
        }

        if($validated['token']) {
            $tokenRecord = \App\Models\Tokens::where('token', $validated['token'])->first();
            if($tokenRecord->used === 0) {
                $tokenRecord->used = 1;
                $tokenRecord->save();
                $party = \App\Models\PoliticalParty::where('name', $validated['party'])->first();
        
                $party->votes += 1;
                $party->save();

            } else {
                return redirect()->back()->withErrors(['token' => 'Invalid or already used token.']);
            }
        } else {
            return redirect()->back()->withErrors(['token' => 'Token is required.']);
        }
        
        return redirect()->back()->with('success', 'Vote recorded successfully!');
    }
}
