<nav class="main-menu">
    <ul class="menu-left">
        <li class="menu-row">
            <div class="menu-col">
                <div class="icon-i"><i class="fas fa-user"></i></div>
            
                <span>Admin</span>
            </div>
        </li>
        <li class="menu-row">
            <a href="{{ url('/') }}" class="menu-col">
                <div class="icon-i"><i class="fas fa-home"></i></div>
                
                <span>Inicio</span>
            </a>
        </li>
        <li class="menu-row">
            <a  href="{{ route('logout') }}" 
                class="menu-col" 
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <div class="icon-i"><i class="fas fa-sign-out-alt"></i></div>
                
                <span>Desconectar</span>
            </a>

            <form id="logout-form" 
                    action="{{ route('logout') }}" 
                    method="POST" 
                    style="display: none;">
                    
                @csrf
            </form>
        </li>
    </ul>
</nav>