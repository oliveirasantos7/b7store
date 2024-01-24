<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;
use App\Models\Category;
use App\Models\State;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('advertises', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->decimal('price');
            $table->boolean('negotiable')->default(false);
            $table->text('description');
            $table->string('contact');
            $table->integer('views');
            $table->foreignIdFor(User::class)
            ->references('id')
            ->on('users');
            $table->foreignIdFor(Category::class)
            ->references('id')
            ->on('categories');
            $table->foreignIdFor(State::class)
            ->references('id')
            ->on('states');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertise');
    }
};
