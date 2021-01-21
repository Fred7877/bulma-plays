<?php


namespace App\Models\RelationShips;

use App\Models\CustomGame;

/**
 * Trait CustomGameRelationShipsTrait
 * @package App\Models\RelationShips
 */
trait GenresRelationShipsTrait
{
    public function customGames() {
        return $this->belongsToMany(CustomGame::all());
    }
}
