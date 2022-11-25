<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class DefaultController extends Controller
{
    public function index(): View
    {

        $recipeCount = $this->getRecipeCount();
        $todaysRecipe = $this->getTodayRecipe();
        $latestRecipes = $this->getLatestRecipes();

        return view('default', compact('recipeCount', 'todaysRecipe', 'latestRecipes'));
    }

    private function getRecipeCount(): int
    {
        return Recipe::count();
    }

    private function getTodayRecipe(): Recipe
    {
        return Recipe::query()->inRandomOrder()->get()->first();
    }

    private function getLatestRecipes(): Collection
    {
        return Recipe::query()->limit(-5)->get();
    }
}
