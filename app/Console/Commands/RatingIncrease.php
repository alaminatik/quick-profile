<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class RatingIncrease extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rating:increase';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User rating increase daily';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       
        try {

            // For User rating increase

            $users = User::cursor();

            foreach($users as $user){

                $last_ratings = $user->ratings;
                $latest_ratings = $last_ratings + rand(1,9);

                User::where('id',$user->id)
                    ->update([
                        'ratings' => $latest_ratings
                    ]);
            }

            $this->info('User rating increase successfully');

 
         } catch (\Exception $e) {

            Log::error($e->getFile(). ' '. $e->getLine(). ' '. $e->getMessage());
            return redirect()->back()->withErrors([
                'errorMsg' => 'Something went wrong. Please try again later.'
            ]);
         }
    }
}
