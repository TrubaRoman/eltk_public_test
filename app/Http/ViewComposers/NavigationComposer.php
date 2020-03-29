<?php

    namespace App\Http\ViewComposers;

    use Illuminate\View\View;
    use App\Models\Menu;

    class NavigationComposer
    {
        public function compose(View $view)
        {
            $menufooter = Menu::isStatus()
                ->ofSort(['parent_id' => 'asc', 'sort_order' => 'asc'])
                ->get();

            $menuitems = $this->buildTree($menufooter);

            return $view->with(['menuitems'=> $menuitems,'menufooter'=>$menufooter]);
        }

        public function buildTree($items)
        {
            $grouped = $items->groupBy('parent_id');

            foreach ($items as $item) {
                if ($grouped->has($item->id)) {
                    $item->children = $grouped[$item->id];
                }
            }

            return $items->where('parent_id', null);
        }
    }