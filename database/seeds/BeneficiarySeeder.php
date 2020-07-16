<?php

use Illuminate\Database\Seeder;

class BeneficiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $beneficiaries = factory(App\Beneficiary::class, 200)
                    ->create()
                    ->each(function ($beneficiary) {
                    $beneficiary->getProgrammeRelation()->save(factory(App\Programme::class)->make());
        });
       
    }
}
