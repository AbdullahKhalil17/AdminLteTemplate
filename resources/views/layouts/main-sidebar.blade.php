<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ URL::asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">{{ trans('dashboard_trans.TreeSystem') }}</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>{{ trans('dashboard_trans.Dashboard') }}</span>
            {{-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> --}}
          </a>
        </li>
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>{{ trans('dashboard_trans.SettingSystem') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> {{ trans('dashboard_trans.AddSpilyer') }}</a></li>
          </ul>
        </li> --}}
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>{{ trans('dashboard_trans.SettingSystem') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> {{ trans('dashboard_trans.BasicInformation') }}
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('Unit.index') }}"><i class="fa fa-circle-o"></i> {{ trans('dashboard_trans.Units') }}</a></li>
                <li><a href="{{ route('Product.index') }}"><i class="fa fa-circle-o"></i> {{ trans('dashboard_trans.Product') }}</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> {{ trans('dashboard_trans.Stores') }}</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> {{ trans('dashboard_trans.Sections') }}</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> {{ trans('dashboard_trans.Groups') }}</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> {{ trans('dashboard_trans.Settlement') }}
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> {{ trans('dashboard_trans.SettleAddition') }}</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> {{ trans('dashboard_trans.ExchangeSettlement') }}</a></li>
              </ul>
            </li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>