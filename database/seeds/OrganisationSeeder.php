<?php

use Illuminate\Database\Seeder;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(App\Organisation::class, 15)->create()->each(function ($org) {
        //     $org->getProgrammeRelation()->save(factory(App\Programme::class)->make());
        // });

        $organisations = factory(App\Organisation::class, 15)
                        ->create()
                        ->each(function ($organisation) {
                        $organisation->getProgrammeRelation()->save(factory(App\Programme::class)->make());
        });
    }
}
