<?php

use Illuminate\Database\Seeder;
use App\Fish;

class FishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fish::create([
            'name_product' => "Tuna",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo odio nec sapien molestie viverra. Nunc et odio luctus, sodales ligula vel, elementum sem. Nulla gravida nec nulla at pretium. Donec et consectetur lacus. In convallis sagittis diam, eu tincidunt velit tempor eu. Fusce sit amet iaculis enim, in faucibus sapien. Sed aliquet lorem nec lobortis elementum. Donec vulputate molestie dapibus.

            Cras libero tortor, mattis in suscipit eu, scelerisque ut ex. Quisque blandit quam vitae pellentesque scelerisque. Sed tempus viverra massa id pharetra. Donec eu fermentum nisl, id aliquam metus. Aenean non risus vitae justo blandit blandit. Curabitur fringilla, erat id feugiat interdum, mi turpis lacinia dui, quis rutrum libero est sit amet justo. Aliquam pharetra mi at lectus faucibus, id posuere mauris varius. Nulla tempor dictum ex vel aliquet. Nam vel auctor enim. Integer at sapien id orci malesuada tempor. Sed dignissim risus tortor, eget faucibus quam convallis id. Ut dictum, dui non dignissim sagittis, risus nunc varius dui, vitae fringilla est sapien a diam. Integer urna neque, tempus non gravida sed, blandit ut tellus.",
            'image' => "1.jpg"
        ]);

        for($i = 2; $i <= 9; $i++){
            Fish::create([
                'name_product' => "Tuna",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo odio nec sapien molestie viverra. Nunc et odio luctus, sodales ligula vel, elementum sem. Nulla gravida nec nulla at pretium. Donec et consectetur lacus. In convallis sagittis diam, eu tincidunt velit tempor eu. Fusce sit amet iaculis enim, in faucibus sapien. Sed aliquet lorem nec lobortis elementum. Donec vulputate molestie dapibus.

                Cras libero tortor, mattis in suscipit eu, scelerisque ut ex. Quisque blandit quam vitae pellentesque scelerisque. Sed tempus viverra massa id pharetra. Donec eu fermentum nisl, id aliquam metus. Aenean non risus vitae justo blandit blandit. Curabitur fringilla, erat id feugiat interdum, mi turpis lacinia dui, quis rutrum libero est sit amet justo. Aliquam pharetra mi at lectus faucibus, id posuere mauris varius. Nulla tempor dictum ex vel aliquet. Nam vel auctor enim. Integer at sapien id orci malesuada tempor. Sed dignissim risus tortor, eget faucibus quam convallis id. Ut dictum, dui non dignissim sagittis, risus nunc varius dui, vitae fringilla est sapien a diam. Integer urna neque, tempus non gravida sed, blandit ut tellus.",
                'image' => $i.".jpeg"
            ]);
        }
    
    }
}
