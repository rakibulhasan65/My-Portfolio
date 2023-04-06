  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4">
      <!-- Brand Logo -->


      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          @if (Auth::user()->userImage == null)
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                      <img src="{{ asset('backend/assets/dist/img/avatar.png') }}" class="img-circle elevation-2"
                          alt="User Image">
                  </div>
                  <div class="info">
                      <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                  </div>
              </div>
          @else
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                      <img src="{{ asset('backend/images/Profile/' . Auth::user()->userImage) }}"
                          class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                      <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                  </div>
              </div>
          @endif
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  {{-- Dashboard  --}}
                  <li class="nav-item menu-open">
                      <a href="{{ Route('admin') }}" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  {{-- Banners  --}}
                  <li class="nav-item menu-open">
                      <a href="{{ Route('banners.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-image"></i>
                          <p>
                              Banners
                          </p>
                      </a>
                  </li>
                  {{-- About Us  --}}
                  <li class="nav-item menu-open">
                      <a href="{{ Route('about.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-address-card"></i>
                          <p>
                              About Us
                          </p>
                      </a>
                  </li>
                  {{-- Eduactions  --}}
                  <li class="nav-item menu-open">
                      <a href="{{ Route('educations.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-school"></i>
                          <p>
                              Eduactions
                          </p>
                      </a>
                  </li>
                  {{-- Experience  --}}
                  <li class="nav-item menu-open">
                      <a href="{{ Route('experiences.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-lightbulb"></i>
                          <p>
                              Experience
                          </p>
                      </a>
                  </li>
                  {{-- Skills  --}}
                  <li class="nav-item menu-open">
                      <a href="{{ Route('skills.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-tools"></i>
                          <p>
                              Skills
                          </p>
                      </a>
                  </li>
                  {{-- Services  --}}
                  <li class="nav-item menu-open">
                      <a href="{{ Route('services.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-handshake"></i>
                          <p>
                              Services
                          </p>
                      </a>
                  </li>
                  {{-- Gallery  --}}
                  <li class="nav-item menu-open">
                      <a href="{{ Route('gallery.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-images"></i>
                          <p>
                              Gallery
                          </p>
                      </a>
                  </li>
                  {{-- Technical Support  --}}
                  <li class="nav-item menu-open">
                      <a href="{{ Route('support.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-headset"></i>
                          <p>
                              Technical Support
                          </p>
                      </a>
                  </li>
                  {{-- Admin Profile Setting --}}
                  <li class="nav-item menu-open">
                      <a href="{{ Route('profile.profileIndex') }}" class="nav-link">
                          <i class="nav-icon fas fa-user"></i>
                          <p>
                              Profile
                          </p>
                      </a>
                  </li>
                  {{-- Hire Me --}}
                  <li class="nav-item menu-open">
                      <a href="{{ Route('hireMeIndex') }}" class="nav-link">
                          <i class="nav-icon fas fa-dollar-sign"></i>
                          <p>
                              Hire Me
                          </p>
                      </a>
                  </li>
                  {{--  Website Setting --}}
                  <li class="nav-item menu-open">
                      <a href="{{ Route('websiteSetting.settingIndex') }}" class="nav-link">
                          <i class="nav-icon fas fa-cog"></i>
                          <p>
                              Setting
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
