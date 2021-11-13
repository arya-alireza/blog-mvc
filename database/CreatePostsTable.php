<?php

namespace Database;

use Core\Database\Migration;
use Core\Database\Blueprint;
use Core\Database\Schema;

class CreatePostsTable extends Migration
{
    protected function up()
    {
        Schema::create("posts", function(Blueprint $table) {
            $table->id();
            $table->unsignedInteger('author_id');
            $table->string('title');
            $table->string('img');
            $table->text('desc');
            $table->timestamps();
        });
    }

    protected function down()
    {
        Schema::drop("posts");
    }
}