<?php

namespace App\Http\ViewComposers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Logo;
use Illuminate\View\View;

class ViewDataComposers
{
    /**
     * The repository implementation.
     *
     */

    /**
     * Create a new view  composer.
     *
     * @return void
     */

    public function __construct()
    {
//        $this->category = $category;
//        $this->banner = $banner;
//        $this->comment = $comment;
//        $this->order = $order;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $local= (session('locale')!= null)?session('locale'):"vi";
        $categoryParentNull = Category::whereNull('parent_id')->get()->toArray();
        $category = new Category();
        $view->with(
            [
                'local' =>$local,
                'category' => $category,
                'categoryParentNull'=>$categoryParentNull

            ]);

    }
}