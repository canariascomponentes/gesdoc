<header>
    <h1>Gestor Documental</h1>
    <nav>
        <ul>
           <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
                {{-- @dump(request()->routeIs('home')) --}}
            </li>
           <li><a href="{{route('documents.index')}}" class="{{request()->routeIs('documents.*') ? 'active' : ''}}">Documentos</a>
                {{-- @dump(request()->routeIs('documents.index')) --}}
            </li>
           {{-- <li><a href="">Nosotros</a></li> --}}
        </ul>
    </nav>
</header>
