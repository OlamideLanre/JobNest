<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return  [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Clerk',
                'salary' => '$30,000'
            ],
            [
                'id' => 3,
                'title' => 'Strategist',
                'salary' => '$40,000'
            ]
        ];
    }

    public static function find(int $id): array
    {
        $Findjob = Arr::first(static::all(), fn($jobs) => $jobs['id'] == $id);
        if (!$Findjob) {
            abort(404);
        }
        return $Findjob;
    }
}
