<nav class="mt-2" >

    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <router-link to="/dashboard" class="nav-link">
          <i class="nav-icon fas fa-grip-horizontal pink"></i>
          <p>
         
            Dashboard
          </p>
        </router-link>
      </li>
      @can('isAdmin')
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-user-plus green"></i>
          <p>
            Cadastrar 
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
          <router-link to="/users" class="nav-link">
              <i class="nav-icon fas fa-user-lock green"></i>
              <p>
                Usuario
              </p>
            </router-link>
          </li>
          <li class="nav-item">
          <router-link to="/cliente" class="nav-link">
              <i class="nav-icon fas fa-user-tie green"></i>
              
              <p>
                Cliente
              </p>
            </router-link>
          </li>
         
         

      
     
            </li>
        </ul>
      </li>
     

      <!-- <li class="nav-item">
        <router-link to="/products" class="nav-link">
          <i class="nav-icon fas fa-list orange"></i>
          <p>
            Product
          </p>
        </router-link>
      </li> -->

     
      @endcan
     
     
          
          

      
      
      
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-inbox orange"></i>
          <p>
            Gestão de Tickets
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
          <router-link to="/tickets" class="nav-link">
              <i class="nav-icon fas fa-calendar-week orange"></i>
              <p>
              Tickets Processado Hoje 
              </p>
            </router-link>
          </li>
          <li class="nav-item">
              <router-link to="/users" class="nav-link">
              <i class="nav-icon fas fa-circle-notch orange"></i>
              <p>
              Tickets Por Redirecionar
              </p>
            </router-link>  
          </li>
          <li class="nav-item">
          <router-link to="/users" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list orange"></i>
              <p>
                Emitir Agenda
              </p>
            </router-link>
          </li>
         
        <li class="nav-item">
          <router-link to="/users" class="nav-link">
            <i class="far fa-file-pdf nav-icon orange"></i>
            <p>Relatórios </p>
          </router-link>
        </li>
        <li class="nav-item">
              <router-link to="/developer" class="nav-link">
                  <i class="nav-icon fas fa-door-open orange"></i>
                  <p>
                 
                      Meus Tickets Abertos
                  </p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/developer" class="nav-link">
                  <i class="nav-icon fas fa-door-closed orange"></i>
                  <p>
                  Meus Tickets Fechado
                  </p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/developer" class="nav-link">
                  <i class="nav-icon fas fa-backspace orange"></i>
                  <p>
                      Meus Tickets Cancelado
                  </p>
              </router-link>
            </li>
        
          </ul>
      </li>
     

      
        
   
      
      
     
      

      <li class="nav-item">
        <a href="#" class="nav-link" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-power-off red"></i>
          <p>
            {{ __('Sair do Sistema') }}
          </p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
    </ul>
  </nav>