<?php


namespace Tests\Unit;


use Dymantic\MultilingualPosts\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostsCategoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     *@test
     */
    public function a_multilingual_posts_category_should_be_bound_into_the_container_as_blog()
    {
        $blog = app('blog');

        $this->assertInstanceOf(Category::class, $blog);
    }
}