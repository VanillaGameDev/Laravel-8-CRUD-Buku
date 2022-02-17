<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_buku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_buku');
            $table->string('jenis_buku');
            $table->string('penerbit');
            $table->text('alamat_penerbit');
            $table->text('pengarang');
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
        //
    }
}
