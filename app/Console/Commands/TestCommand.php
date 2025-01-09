<?php

namespace App\Console\Commands;

use App\Classes\Employ;
use App\Models\Country;
use App\Models\Image;
use App\Models\Plant;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        $plant = Plant::create([
//            'name' => 'Plant 1',
//            'description' => 'Plant 1 description',
//            'type' => 'type 1',
//            'age' => 1,
//            'height' => 1.1,
//        ]);
//
//        dd($plant);

//        $users = DB::table('users')
//            ->join('employes', 'users.id', '=', 'employes.user_id')
//            ->whereBetween('created_at', []);
//        $employs = DB::table('employes')->first();
//
//        $objectEmploy = new Employ('John', 'Doe', 's@gmai.com', 'IT');
//
//        $collectionEmploy = collect([
//            [
//                'first_name' => 'John',
//                'last_name' => 'Doe',
//                'email' => '',
//                'department' => 'IT'
//            ]
//        ]);

//        dd($users);

//        $fakePlants = Plant::factory(15)->create();
//
//        dd($fakePlants);

//        $country = Country::where('name', 'Georgia')->first();
//
//        $plantsInGeorgia = Plant::where('country_id', 191)->get();
//
//        dd($plantsInGeorgia->count());


//        $plant = Plant::find(15);
//        $country = $plant->country()->first();
//        $country = $plant->country;
//
//        $newPlant = Plant::find(25);
////        DB::table('plants')->where('id', 25)->update(['country_id' => $country->id]);
//        $newPlant->country()->associate($country)->save();
//
//        $plantsInCountry = $country->plants;
//
//        dd($plantsInCountry);


//        $plant = Plant::find(15);

//        $plant->plantDetails()->create([
//            'color' => 'Green',
//            'characteristics' => 'Tall plant with green leaves',
//        ]);

//        dd(
//            $plant->item
//        );

        $post = Post::find(1);
        $video = Video::find(1);
        $imageOne = Image::find(2);

        dd(
            $imageOne->imageable
        );

    }
}
