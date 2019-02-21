<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     factory(App\Neww::class,100)->create()
    //           ->each(function($neww){
    //               $user = App\User::inRandomOrder()->first(); 
    //               $neww->user_id = $user->id; 
    //               $neww->save();
    //     }); 
    // }

    public function run()
    {
        App\User::all()->each(function (App\User $u) {
            $u->news()->saveMany(factory(App\Neww::class, 5)->make());
        });
    }


}
