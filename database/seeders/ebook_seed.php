<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ebook_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ebooks')->insert([

            [
                'id' => '1',
                'title' => 'harry potter',
                'author' => 'jk rowling',
                'description' => ' "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." '

            ],

            [
                'id' => '2',
                'title' => 'diary of wimpy kid',
                'author' => 'jeff kinney',
                'description' => ' "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat." '
            ],

            [
                'id' => '3',
                'title' => 'kambing jantan',
                'author' => 'raditya dika',
                'description' => ' "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains." '
            ],

            [
                'id' => '4',
                'title' => 'manusia setengah salmon',
                'author' => 'raditya dika',
                'description' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at justo diam. Sed non nisl nec ex auctor ornare facilisis ac massa. Etiam vitae tellus mattis, convallis justo ac, auctor purus. Quisque placerat, mi sit amet congue egestas, odio felis luctus leo, vel sodales lorem lacus quis augue. Nam in mauris sem. Aliquam blandit ante magna, id vehicula mi faucibus et. Praesent fermentum quam erat, id varius mauris tincidunt nec. Maecenas feugiat sodales metus, ac ultrices neque interdum non. Nunc elementum tellus tortor, varius posuere elit sodales at. Donec eu ligula sagittis velit ullamcorper vehicula et vitae lectus. Morbi ultricies mauris sem, ut vestibulum orci posuere ac. Cras pulvinar egestas magna eu egestas. '
            ]





        ]);
    }
}
