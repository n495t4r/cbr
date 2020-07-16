<?php

use Illuminate\Database\Seeder;

class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programmes = factory(App\Programme::class, 20)
                    ->create()
                    ->each(function ($programme) {
                    $programme->getOrganisationRelation()->save(factory(App\Organisation::class)->make());
                    $programme->getBeneficiaryRelation()->save(factory(App\Beneficiary::class)->make());
        });

    }
}
