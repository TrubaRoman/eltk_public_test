<?php

    namespace App\Admin\Extensions\Nav;

    use Illuminate\Contracts\Support\Renderable;

    class Dropdown implements Renderable
    {
        public function render()
        {
            return <<<HTML
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-th"></i>
    </a>
    <ul class="dropdown-menu" style="padding: 0;box-shadow: 0 2px 3px 0 rgba(0,0,0,.2);">
        <li>
           <div class="box box-solid" style="width: 300px;height: 300px;margin-bottom: 0;">
            <!-- /.box-header -->
            <div class="box-body">
      
              <a class="btn btn-app" href="
              /hala-bala/services
              ">
            <i class="fa fa-bolt"></i> services
              </a>
<!--              <a class="btn btn-app" href="/users">-->
<!--                <i class="fa fa-users"></i> Users-->
<!--              </a>-->
              <a class="btn btn-app" href="/hala-bala/prices">
                <i class="fa fa-dollar"></i> Prices
              </a>
              <a class="btn btn-app" href="/admin/contacts">
                <i class="fa fa-envelope"></i> Messages
              </a>
              
              <a class="btn btn-app" href="/admin/menus">
                <i class="fa fa-list"></i> Menu header
              </a>
              <a class="btn btn-app" href="/tags">
                <i class="fa fa-tags"></i> Tags
              </a>
              <a class="btn btn-app" href="/documents">
                <i class="fa fa-file-o"></i> Documents
              </a>
              <a class="btn btn-app" href="/chartjs">
                <i class="fa fa-line-chart"></i> Charts
              </a>
            </div>
            <!-- /.box-body -->
          </div>
      </li>
    </ul>
</li>
HTML;

        }
    }