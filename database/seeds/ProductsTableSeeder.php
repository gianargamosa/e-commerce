<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      DB::table('products')->insert([
        'product_image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/91/The_Casual_Vacancy.jpg/220px-The_Casual_Vacancy.jpg',
        'product_name' => 'The Casual Vacancy',
        'product_description' => 'The Casual Vacancy is a 2012 novel written by J. K. Rowling. The book was published worldwide by the Little, Brown Book Group on 27 September 2012. A paperback edition was released on 23 July 2013.',
        'amount' => '2500',
        'category' => 'Computers',
      ]);

      DB::table('products')->insert([
        'product_image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/8/8d/Fantastic_beasts.JPG/220px-Fantastic_beasts.JPG',
        'product_name' => 'Fantastic Beasts and Where to Find Them',
        'product_description' => 'Fantastic Beasts and Where to Find Them is a 2001 book written by British author J. K. Rowling (under the pen name of the fictitious author Newt Scamander) about the magical creatures in the Harry Potter universe.',
        'amount' => '2750',
        'category' => 'Computers',
      ]);

      DB::table('products')->insert([
        'product_image' => 'https://upload.wikimedia.org/wikipedia/en/a/a0/Harry_Potter_and_the_Prisoner_of_Azkaban.jpg',
        'product_name' => 'Harry Potter and the Prisoner of Azkaban',
        'product_description' => 'Harry Potter and the Prisoner of Azkaban is the third novel in the Harry Potter series, written by J. K. Rowling. The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry.',
        'amount' => '2770',
        'category' => 'Computers',
      ]);

    }
}
