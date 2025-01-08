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
      
        DB::table('todos')->truncate();

        $testData = [
            [
                'content' => 'PHP Appセクションを終える',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Laravel Lessonを終える',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    
        DB::table('todos')->insert($testData); 
        {
            $this->call([
                TodoSeeder::class,
            ]);
        }
        
        // $this->call(UsersTableSeeder::class);
    }
}
