      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('dashboard') }}">
                      <i class="icon-grid menu-icon"></i>
                      <span class="menu-title">Dashboard</span>
                  </a>
              </li>

                {{--
                    Category
                --}}

              <li class="nav-item">
                  <a class="nav-link" href="{{ route('notise.index') }}" aria-controls="Category">
                      <i class="icon-paper menu-icon"></i>
                      <span class="menu-title">Category</span>
                  </a>
              </li>

              {{--
                    Notise board
                --}}

              <li class="nav-item">
                  <a class="nav-link" href="{{ route('notise.index') }}" aria-controls="Notise">
                      <i class="icon-paper menu-icon"></i>
                      <span class="menu-title">Notise</span>
                  </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#account" aria-expanded="false"
                      aria-controls="Account">
                      <i class="icon-layout menu-icon"></i>
                      <span class="menu-title">Account Managment</span>
                      <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="account">
                      <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="{{ route('paymentstatuses.index') }}">Payment
                                  Details</a></li>
                          <li class="nav-item"> <a class="nav-link" href="{{ route('paymentprint') }}">Payment Print</a>
                          </li>
                      </ul>
                  </div>
              </li>

              <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="Feetdback"
                      href="#feetdback">
                      <i class="mdi mdi-comment-text-outline"></i>
                      <span class="menu-title">Feedback</span>
                      <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="feetdback">
                      <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="#">Manage Feedback</a></li>
                      </ul>
                  </div>
              </li>

          </ul>
      </nav>
      <!-- partial -->
