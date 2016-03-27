<?php namespace Adrenth\Redirect\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateRedirectExportsTable extends Migration
{

    public function up()
    {
        Schema::create('adrenth_redirect_redirect_exports', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adrenth_redirect_redirect_exports');
    }

}
