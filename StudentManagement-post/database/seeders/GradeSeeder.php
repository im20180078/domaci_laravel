<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i=0;

        while(true)
        {
            try{
                Grade::factory()->create();
                $i++;

                if($i==10)
                {
                    break;
                }
            }
            catch(Throwable $t)
            {

            }
        }
    }
}
