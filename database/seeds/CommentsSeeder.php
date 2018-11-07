<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Comment;
use App\Team;
class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Comment::class, 5)->create([
          'user_id' => $this->getRandomUserId(),
          'team_id' => $this->getRandomTeamId()
        ]
      );


    }
      private function getRandomUserId() {
          $user = User::inRandomOrder()->first();
          return $user->id;
      }
      private function getRandomTeamId() {
          $team = Team::inRandomOrder()->first();
          return $team->id;
      }

}
