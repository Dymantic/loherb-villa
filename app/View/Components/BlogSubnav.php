<?php

namespace App\View\Components;

use Dymantic\MultilingualPosts\Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class BlogSubnav extends Component
{
    public $current;
    public $subcategories;

    public function __construct(string $current)
    {
        $this->current = $current;
        $this->subcategories = Category::whereNotIn('id', [1,2,3,4])
            ->whereHas('posts', fn($q) => $q->where([
                ['is_draft', 0], ['publish_date', '<=', Carbon::now()]
            ]))
            ->get()
            ->map(fn (Category $category) => ['option' => $category->title, 'url' => '/journal/category/' . $category->slug])->all();
    }


    public function render()
    {
        return view('components.blog-subnav');
    }

    public function isCurrent($slug)
    {
        return Str::contains($this->current, $slug);
    }

}
