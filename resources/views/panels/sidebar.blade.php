<aside
  class="{{$configData['sidenavMain']}} @if(!empty($configData['activeMenuType'])) {{$configData['activeMenuType']}} @else {{$configData['activeMenuTypeClass']}}@endif @if(($configData['isMenuDark']) === true) {{'sidenav-dark'}} @elseif(($configData['isMenuDark']) === false){{'sidenav-light'}}  @else {{$configData['sidenavMainColor']}}@endif">
  <div class="brand-sidebar">
    <h1 class="logo-wrapper">
      <a class="brand-logo darken-1" href="{{asset('/')}}">
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
  <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
    data-menu="menu-navigation" data-collapsible="menu-accordion">
    <li class="navigation-header">
          <a class="navigation-header-text">Navigation</a>
          <i class="navigation-header-icon material-icons"></i>
        </li>
        <li class="bold">
        <a class="waves-effect waves-cyan"
          href="{{route('admin.user')}}">
          <i class="material-icons">person_outline</i>
          <span class="menu-title">User</span>
        </a>
        </li>
        <li class="bold">
        <a class="waves-effect waves-cyan"
          href="{{route('admin.gold')}}">
          <i class="material-icons dp48">card_giftcard</i>
          <span class="menu-title">Gold</span>
        </a>
        </li>
        <li class="bold">
        <a class="waves-effect waves-cyan"
          href="{{route('admin.gold')}}">
          <i class="material-icons dp48">attach_money</i>
          <span class="menu-title">Transaction</span>
        </a>
        </li>
        <li class="bold">
        <a class="waves-effect waves-cyan"
          href="{{route('admin.gold')}}">
         <i class="material-icons dp48">picture_in_picture</i>
          <span class="menu-title">Banner</span>
        </a>
        </li>
        <li class="bold">
        <a class="waves-effect waves-cyan"
          href="{{route('admin.store')}}">
         <i class="material-icons dp48">home</i>
          <span class="menu-title">Store</span>
        </a>
        </li>
    {{-- Foreach menu item starts --}}
    
  </ul>
  <div class="navigation-background"></div>
  <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
    href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>