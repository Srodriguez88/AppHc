<header id="header" class="page-topbar">    
    <div class="navbar-fixed">
      <nav class="navbar-color gradient-45deg-light-blue-cyan">
        <div class="nav-wrapper">
          <ul class="left">
            <li>
              <h1 class="logo-wrapper">
                <a href="index.html" class="brand-logo darken-1">
                  <img src="{{asset ('assets/images/logo/materialize-logo.png')}}" alt="materialize logo">
                  <span class="logo-text hide-on-med-and-down">HealthCare</span>
                </a>
              </h1>
            </li>
          </ul>
          <div class="header-search-wrapper hide-on-med-and-down">
            <i class="material-icons">search</i>
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Que Buscas?..." />
          </div>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">
                <span class="flag-icon flag-icon-gb"></span>
              </a>
            </li>
            <li>
              <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                <i class="material-icons">settings_overscan</i>
              </a>
            </li>
       
            <li>
              <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                <span class="avatar-status avatar-online">
                  <img src="{{asset ('assets/images/avatar/avatar-7.png')}}" alt="avatar">
                  <i></i>
                </span>
              </a>
            </li>
          
          </ul>
          <!-- translation-button -->
          <ul id="translation-dropdown" class="dropdown-content">
            <li>
              <a href="#!" class="grey-text text-darken-1">
                <i class="flag-icon flag-icon-gb"></i> English</a>
            </li>
            <li>
              <a href="#!" class="grey-text text-darken-1">
                <i class="flag-icon flag-icon-es"></i> Espanol</a>
            </li>
           
          </ul>
       
          <!-- profile-dropdown -->
          <ul id="profile-dropdown" class="dropdown-content">
            <li>
              <a href="#" class="grey-text text-darken-1">
                <i class="material-icons">face</i> Perfil</a>
            </li>
            <li>
              <a href="#" class="grey-text text-darken-1">
                <i class="material-icons">settings</i> Ajustes</a>
            </li>
            <li>
              <a href="#" class="grey-text text-darken-1">
                <i class="material-icons">live_help</i> Ayuda</a>
            </li>
            <li class="divider"></li>
         
            <li>
              <a href="#" class="grey-text text-darken-1">
                <i class="material-icons">keyboard_tab</i> Salir</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>