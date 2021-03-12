<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDataTypePkpt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("TRUNCATE TABLE pkpt_type_pkpt");
        DB::insert("INSERT INTO `pkpt_type_pkpt` (`id`, `name`, `code`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`) VALUES (1, 'PKPT Tim', 'pkpt_tim', NULL, 0, NULL, 0, NULL, 0, 0);");
        DB::insert("INSERT INTO `pkpt_type_pkpt` (`id`, `name`, `code`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`) VALUES (2, 'PKPT Banyak Tim', 'pkpt_banyak_tim', NULL, 0, NULL, 0, NULL, 0, 0);");
        DB::insert("INSERT INTO `pkpt_type_pkpt` (`id`, `name`, `code`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`) VALUES (3, 'PKPT Non Tim', 'pkpt_non_tim', NULL, 0, NULL, 0, NULL, 0, 0);");
        DB::insert("INSERT INTO `pkpt_type_pkpt` (`id`, `name`, `code`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`) VALUES (4, 'Non-PKPT Tim', 'non_pkpt_tim', NULL, 0, NULL, 0, NULL, 0, 0);");
        DB::insert("INSERT INTO `pkpt_type_pkpt` (`id`, `name`, `code`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`) VALUES (5, 'Non-PKPT Banyak Tim', 'non_pkpt_banyak_tim', NULL, 0, NULL, 0, NULL, 0, 0);");
        DB::insert("INSERT INTO `pkpt_type_pkpt` (`id`, `name`, `code`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `is_deleted`) VALUES (6, 'Non-PKPT Non Tim', 'non_pkpt_non_tim', NULL, 0, NULL, 0, NULL, 0, 0);");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
