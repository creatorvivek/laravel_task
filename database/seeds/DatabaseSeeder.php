<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 30)->create()->each(function($user) {

    // $entity = factory(App\Entity::class)->make();

    $address = factory(App\Profile::class)->create([
        'user_id' =>factory(App\User::class)->make(),
    
    ]);
$user->address()->save($address);
    // $user->entities()->save($entity);
});
    }
}
