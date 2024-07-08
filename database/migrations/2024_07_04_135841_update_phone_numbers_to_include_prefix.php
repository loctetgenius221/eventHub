<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('include_prefix', function (Blueprint $table) {
            $users = User::all();

            foreach ($users as $user) {
                $phone = $user->phone;

                // Ajouter le préfixe +221 si manquant
                if (!preg_match('/^\+221/', $phone)) {
                    $user->phone = '+221' . ltrim($phone, '0');
                    $user->save();
                }
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('include_prefix', function (Blueprint $table) {
            //
        });
    }
};
