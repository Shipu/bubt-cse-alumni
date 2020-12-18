<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReferenceToUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->string('reference', 100)->nullable()->after('identity_type');
            $table->string('company_name', 100)->nullable()->after('identity_type');
            $table->string('job_position', 70)->nullable()->after('company_name');
            $table->string('photo')->nullable()->after('mobile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->dropColumn('reference');
            $table->dropColumn('company_name');
            $table->dropColumn('job_position');
            $table->dropColumn('photo');
        });
    }
}
