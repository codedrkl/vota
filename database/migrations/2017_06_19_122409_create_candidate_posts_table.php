<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned();
            $table->integer('candidate_id')->unsigned();
            $table->text('manifesto');
            $table->timestamps();
        });

        Schema::table('candidate_posts', function(Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->unique(['post_id', 'candidate_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_posts');
    }
}
