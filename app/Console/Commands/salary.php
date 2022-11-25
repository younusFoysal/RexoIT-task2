<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class salary extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rexoit:salary {amount}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add salary with cmd';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //return Command::SUCCESS;

        //echo User::count() . "\n";

        // $usersData = $this->argument('amount');

        /*UPDATE `wallet` SET `salary_amount` = '17';
        for ($i = 1; $i < $usersData; $i++) {
            User::factory()->create();
        }*/



        $amount = $this->argument('amount');

        /*DB::table('wallet')
            ->updateOrInsert(
                ['salary_amount' => '2'],
                ['votes' => '2']
            );*/

        DB::table('wallet')->increment('salary_amount', $amount);

        print "Done. Check databse";


        /*$affected = DB::table('wallet')
            ->where('salary_amount')
            ->update(['Value' => '17']);*/


        //$users = DB::table('users')->get();

       /* foreach ($users as $user) {
            echo $user->name;
        }*/

        //$user = DB::connection('mysql2')->select("UPDATE `wallet` SET `salary_amount` = '$amount'");




        /*$type = 'testing';
        $reporter = "John O'Hara";
        $query = "INSERT INTO contents (type, reporter, description) VALUES(?, ?, 'whatever')";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$type, $reporter]);*/


     /*   $reporter = "John O'Hara";
        $stmt = $mysqli->prepare("SELECT * FROM users WHERE name=?");
        $stmt->bind_param("s", $reporter);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc(); // or while (...)
*/



        /*//$userNameArray = [];  //if you want to show name in table
         if (count($user) > 0) {
             foreach ($user as $item) {
                 $this->line($item->name);
                 //$userNameArray[] = $item->name;
             }
         }

       $this->info($amount . ' Done');*/
       //$this->table(['Name'],$userNameArray); //optionall



    }
}
