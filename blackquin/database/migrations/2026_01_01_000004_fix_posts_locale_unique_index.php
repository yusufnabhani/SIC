<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class FixPostsLocaleUniqueIndex extends Migration
{
    /**
     * The original migration declared unique(['post_id', 'locale']) but the posts
     * table has no post_id column. Laravel/SQLite silently built the index on
     * 'locale' alone, which allows only one post per locale in the whole table —
     * breaking a multi-post blog. Drop the bogus index.
     */
    public function up()
    {
        if (Schema::hasTable('posts')) {
            DB::statement('DROP INDEX IF EXISTS posts_post_id_locale_unique');
        }
    }

    public function down()
    {
        // Not recreated: the original index was invalid and unintentional.
    }
}
