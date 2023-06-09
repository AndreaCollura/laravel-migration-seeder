<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 50);
			$table->string('departure_station', 100);
			$table->string('arrival_station', 100);
			$table->time('arrival_eta');
			$table->smallInteger('train_code')->unique();
			$table->tinyInteger('n_wagons');
			$table->boolean('on_time')->default(1);
			$table->boolean('cnx')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};



// <?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::table('trains', function (Blueprint $table) {
//             $table->date('departure_date')->after('arrival_station');
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::table('trains', function (Blueprint $table) {
//             $table->dropColumn('departure_date');
//         });
//     }
// };
