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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('id_pembayaran');
            $table
                ->foreign('id_pembayaran')
                ->references('id')
                ->on('pembayarans')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedbigInteger('id_admin');
            $table
                ->foreign('id_admin')
                ->references('id')
                ->on('admins')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedbigInteger('id_mobil');
            $table
                ->foreign('id_mobil')
                ->references('id')
                ->on('mobils')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->date('tgl_pesan');
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
        Schema::dropIfExists('transaksis');
    }
};
