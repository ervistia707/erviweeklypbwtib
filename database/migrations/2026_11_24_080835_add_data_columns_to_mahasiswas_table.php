
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->string('nama');
            $table->bigInteger('nim')->unique();
            $table->string('prodi');
            $table->string('email')->unique();
            $table->bigInteger('nohp');
            $table->string('foto');
        });
    }

    public function down(): void
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->dropColumn([
                'nama',
                'nim',
                'prodi',
                'email',
                'nohp',
                'foto'
            ]);
        });
    }
};
