<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1546118440PatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            if(Schema::hasColumn('patients', 'address')) {
                $table->dropColumn('address');
            }
            
        });
Schema::table('patients', function (Blueprint $table) {
            
if (!Schema::hasColumn('patients', 'address')) {
                $table->string('address')->nullable();
                }
if (!Schema::hasColumn('patients', 'gravida')) {
                $table->integer('gravida')->nullable();
                }
if (!Schema::hasColumn('patients', 'parity')) {
                $table->integer('parity')->nullable()->unsigned();
                }
if (!Schema::hasColumn('patients', 'edd')) {
                $table->date('edd')->nullable();
                }
if (!Schema::hasColumn('patients', 'hiv_status')) {
                $table->string('hiv_status')->nullable();
                }
if (!Schema::hasColumn('patients', 'hiv_test_date')) {
                $table->date('hiv_test_date')->nullable();
                }
if (!Schema::hasColumn('patients', 'hiv_test_place')) {
                $table->string('hiv_test_place')->nullable();
                }
if (!Schema::hasColumn('patients', 'current_art_status')) {
                $table->string('current_art_status')->nullable();
                }
if (!Schema::hasColumn('patients', 'current_art_option')) {
                $table->string('current_art_option')->nullable();
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('gravida');
            $table->dropColumn('parity');
            $table->dropColumn('edd');
            $table->dropColumn('hiv_status');
            $table->dropColumn('hiv_test_date');
            $table->dropColumn('hiv_test_place');
            $table->dropColumn('current_art_status');
            $table->dropColumn('current_art_option');
            
        });
Schema::table('patients', function (Blueprint $table) {
                        $table->text('address')->nullable();
                
        });

    }
}
