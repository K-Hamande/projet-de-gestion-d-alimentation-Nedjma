<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{Route('accueil')}}">alimentation Nedjama</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{Route('accueil')}}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="active"><a class="nav-link" href="{{Route('accueil')}}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>


            <li class=""><a class="nav-link" href="{{Route('products.create')}} "><i class="fas fa-hand-point-right"></i> <span>Ajouter un Produit </span></a></li>

            <li class=""><a class="nav-link" href="{{Route('products.list')}} "><i class="fas fa-hand-point-right"></i> <span> Lister Les Produit</span></a></li>

            <li class="">
                
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')" 
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __(' se deconnecter') }}
                    </x-dropdown-link>
                </form>
            
            
            </li>

 
            

        </ul>
    </aside>
</div>