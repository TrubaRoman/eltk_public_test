<?php


    namespace App\Admin\Actions;
    use Encore\Admin\Actions\Action;
    use Illuminate\Http\Request;

    class ClearCache extends Action
    {
        protected $selector = '.clear-cache';

        public function handle(Request $request)
        {
            return $this->response()->success(" Cache wyczyszczony")->refresh();
        }

        public function dialog()
        {
            $this->confirm('Oczyścić Cache');
        }

        public function html()
        {
            return <<<HTML
<li>
    <a class="clear-cache" href="#">
      <i class="fa fa-trash"></i>
      <span>Oczyścić Cache</span>
    </a>
</li>
HTML;
        }
    }