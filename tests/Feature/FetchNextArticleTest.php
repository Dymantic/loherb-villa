<?php


namespace Tests\Feature;


use Dymantic\MultilingualPosts\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class FetchNextArticleTest extends TestCase
{
    use RefreshDatabase;

    /**
     *@test
     */
    public function fetch_html_for_next_article()
    {
//        $this->withoutExceptionHandling();
//
//        $postA = Post::create([
//            'title' => ['en' => 'test title', 'zh' => 'zh test title'],
//            'intro' => ['en' => 'test intro', 'zh' => 'zh test intro'],
//            'description' => ['en' => 'test description', 'zh' => 'zh test description'],
//            'content-around' => ['en' => 'test content', 'zh' => 'zh test content'],
//        ]);
//        $postA->is_draft = false;
//        $postA->publish_date = Carbon::yesterday();
//        $postA->first_published_on = Carbon::yesterday();
//        $postA->save();
//
//
//        $postB = Post::create([
//            'title' => ['en' => 'test title', 'zh' => 'zh test title'],
//            'intro' => ['en' => 'test intro', 'zh' => 'zh test intro'],
//            'description' => ['en' => 'test description', 'zh' => 'zh test description'],
//            'content-around' => ['en' => 'test content', 'zh' => 'zh test content'],
//        ]);
//        $postB->is_draft = false;
//        $postB->publish_date = Carbon::yesterday()->subDay();
//        $postB->first_published_on = Carbon::yesterday()->subDay();
//        $postB->save();
//
//        $response = $this->assertGuest()->get("/api/posts/{$postA->id}/next");
//        $response->assertSuccessful();
//
//        dd($response->decodeResponseJson());


    }
}
