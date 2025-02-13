<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Support\Arr;
class Jobs extends Model{
    protected $table = "job_listings";

    protected $fillable = ['title','salary'];
    // public static function getAll(): array{
    //     return [
    //         [
    //             'id' => 1,
    //             'title' => 'Director',
    //             'salary' => 5000
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'Programer',
    //             'salary' => 5000
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Ninja',
    //             'salary' => 5000
    //         ]
    //     ];
    // }

    // public static function getById(int $id): array{
    //     $jobs =  Arr::first(self::getAll(), fn($job) => $job['id'] == $id);

    //     if(! $jobs) {
    //     abort(404);
    //     }
    //     else{
    //         return $jobs;
    //     }
    // }

}