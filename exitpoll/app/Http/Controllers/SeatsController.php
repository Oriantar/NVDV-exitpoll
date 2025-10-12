<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SeatsController extends Controller
{

public function show()
{
    
    $partys = \App\Models\PoliticalParty::all()->sortByDesc('votes');
    $countedVotes = \App\Models\Tokens::all()->where('used', 1)->count();
    $totalSeats = 150;
    $seatDivisor = $countedVotes / $totalSeats;
    $totalAllocated = 0;
    
    foreach($partys as $party) {
        if($seatDivisor == 0 || $party->votes == 0 || $party->votes < $seatDivisor) {
            return view('public', ['partys' => $partys, 'countedVotes' => $countedVotes]);
        }    
        $party->seats = round($party->votes / $seatDivisor);
        $totalAllocated += $party->seats;
    }
    $remainingSeats = $totalSeats - $totalAllocated;

    foreach ($partys as $party) {
        $party->remainder = ($party->votes / $seatDivisor) - $party->seats;
    }


    $sortedByRemainder = $partys->sortByDesc('remainder');


    foreach ($sortedByRemainder as $party) {
        if ($remainingSeats <= 0) break;
            $party->seats += 1;
            $remainingSeats--;
    }
    return view('public', ['partys' => $partys, 'countedVotes' => $countedVotes]);
}}