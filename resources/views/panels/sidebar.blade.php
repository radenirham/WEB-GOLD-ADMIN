<aside
  class="{{$configData['sidenavMain']}} {{'sidenav-dark'}}">
  <div class="brand-sidebar">
    <h1 class="logo-wrapper">
      <a class="brand-logo" href="{{asset('images/favicon/sg-icon.png')}}">
        @if(!empty($configData['mainLayoutType']) && isset($configData['mainLayoutType']))
          @if($configData['mainLayoutType']=== 'vertical-modern-menu')
         

          @elseif($configData['mainLayoutType']=== 'vertical-menu-nav-dark')
          

          @elseif($configData['mainLayoutType']=== 'vertical-gradient-menu')
          

          @elseif($configData['mainLayoutType']=== 'vertical-dark-menu')
          
          @endif
        @endif
        <span class="logo-text hide-on-med-and-down">
          SUPERGOLD
        </span>
      </a>
      <a class="navbar-toggler" href="javascript:void(0)"><i class="material-icons">radio_button_checked</i></a></h1>
  </div>
  <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow ps" id="slide-out"
    data-menu="menu-navigation" data-collapsible="menu-accordion">
    <li class="navigation-header">
          <a class="navigation-header-text">Navigation</a>
          <i class="navigation-header-icon material-icons"></i>
        </li>
        <li class="{{(request()->is('admin/user'.'*')) ? 'active' : '' }}">
        <a class="{{(request()->is('admin/user'.'*')) ? 'active '.$configData['activeMenuColor'] : '' }}"
                  @if(!empty($configData['activeMenuColor'])) {{'style=background:none;box-shadow:none;'}} @endif
          href="{{route('admin.user')}}">
          <i class="material-icons">person_outline</i>
          <span class="menu-title">User</span>
        </a>
        </li>
        <li class="bold {{(request()->is('admin/gold'.'*')) ? 'active' : '' }}">
        <a class="collapsible-header waves-effect waves-cyan"
          @if(!empty($configData['activeMenuColor'])) {{'style=background:none;box-shadow:none;'}} @endif
          href="javascript:void(0)">
          <i class="material-icons dp48">card_giftcard</i>
          <span class="menu-title">Gold</span>
        </a>
        <div class="collapsible-body">
          <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li class="{{(request()->is('admin/gold'.'*')) ? 'active' : '' }}">
                <a href="{{route('admin.gold')}}"
                  class="{{(request()->is('admin/gold'.'*')) ? 'active '.$configData['activeMenuColor'] : '' }}"
                  @if(!empty($configData['activeMenuColor'])) {{'style=background:none;box-shadow:none;'}} @endif>
                  <i class="material-icons">radio_button_unchecked</i>
                  <span>Gold</span>
                </a>
              </li>
              <li class="{{(request()->is('admin/gold/download'.'*')) ? 'active' : '' }}">
                <a href="{{route('admin.gold.donwloadform')}}"
                  class="{{(request()->is('admin/gold/download'.'*')) ? 'active '.$configData['activeMenuColor'] : '' }}"
                  @if(!empty($configData['activeMenuColor'])) {{'style=background:none;box-shadow:none;'}} @endif>
                  <i class="material-icons">radio_button_unchecked</i>
                  <span>Download QR</span>
                </a>
              </li>
          </ul>
        </div>
        </li>
        <li class="bold">
        <a class="{{(request()->is('admin/transaction'.'*')) ? 'active '.$configData['activeMenuColor'] : '' }}"
            @if(!empty($configData['activeMenuColor'])) {{'style=background:none;box-shadow:none;'}} @endif
          href="#">
          <i class="material-icons dp48">attach_money</i>
          <span class="menu-title">Transaction</span>
        </a>
        </li>
        <li class="bold">
        <a class="waves-effect waves-cyan"
          href="#"
          class="{{(request()->is('admin/banner'.'*')) ? 'active '.$configData['activeMenuColor'] : '' }}"
                  @if(!empty($configData['activeMenuColor'])) {{'style=background:none;box-shadow:none;'}} @endif>
         <i class="material-icons dp48">picture_in_picture</i>
          <span class="menu-title">Banner</span>
        </a>
        </li>
        <li class="bold">
        <a
          href="{{route('admin.store')}}"
          class="{{(request()->is('admin/store'.'*')) ? 'active '.$configData['activeMenuColor'] : '' }}"
                  @if(!empty($configData['activeMenuColor'])) {{'style=background:none;box-shadow:none;'}} @endif>
         <i class="material-icons dp48">home</i>
          <span class="menu-title">Store</span>
        </a>
        </li>
        <li class="bold">
        <a
          href="{{route('admin.manufacture')}}"
          class="{{(request()->is('admin/manufacture'.'*')) ? 'active '.$configData['activeMenuColor'] : '' }}"
                  @if(!empty($configData['activeMenuColor'])) {{'style=background:none;box-shadow:none;'}} @endif>
         <i class="material-icons dp48">perm_device_information</i>
          <span class="menu-title">Manufaktur</span>
        </a>
        </li>
    {{-- Foreach menu item starts --}}
    
  </ul>
  <div class="navigation-background"></div>
  <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
    href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>