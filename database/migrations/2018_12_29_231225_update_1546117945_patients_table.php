<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1546117945PatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            
if (!Schema::hasColumn('patients', 'mpi_code')) {
                $table->string('mpi_code')->nullable();
                }
if (!Schema::hasColumn('patients', 'date_enrolled')) {
                $table->date('date_enrolled')->nullable();
                }
if (!Schema::hasColumn('patients', 'pmct_code')) {
                $table->string('pmct_code')->nullable();
                }
if (!Schema::hasColumn('patients', 'name')) {
                $table->string('name')->nullable();
                }
if (!Schema::hasColumn('patients', 'dob')) {
                $table->date('dob')->nullable();
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
            $table->dropColumn('mpi_code');
            $table->dropColumn('date_enrolled');
            $table->dropColumn('pmct_code');
            $table->dropColumn('name');
            $table->dropColumn('dob');
            
        });

    }
}
