<?php

namespace App\Http\Controllers;

use App\Models\MatchGame;
use Illuminate\Http\Request;

class MatchGameController extends Controller
{
    public function store(Request $request)
    {
        \Log::info('=== MATCH CREATION START ===');
        \Log::info('All request data:', $request->all());

        try {
            $validated = $request->validate([
                'home_team' => 'required|string|max:255',
                'away_team' => 'required|string|max:255',
                'home_score' => 'nullable|integer|min:0',
                'away_score' => 'nullable|integer|min:0',
                'match_date' => 'required|string', // Changed to string first
                'location' => 'nullable|string|max:255',
                'competition' => 'nullable|string|max:255',
                'season' => 'nullable|string|max:255',
                'status' => 'required|in:scheduled,finished,canceled',
                'notes' => 'nullable|string'
            ]);

            \Log::info('Validation passed:', $validated);

            $validated['match_date'] = \Carbon\Carbon::parse($validated['match_date'])->format('d-m-Y');

            \Log::info('Converted match_date:', ['match_date' => $validated['match_date']]);

            $matchGame = MatchGame::create($validated);

            \Log::info('Match created successfully:', [
                'id' => $matchGame->id,
                'home_team' => $matchGame->home_team
            ]);

            return redirect()->back()->with('success', 'Match created successfully');

        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('Validation failed:', $e->errors());
            return redirect()->back()->withErrors($e->errors())->withInput();

        } catch (\Exception $e) {
            \Log::error('Error creating match:', [
                'message' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ]);
            return redirect()->back()->with('error', 'Failed to create match: ' . $e->getMessage());
        }
    }
}
