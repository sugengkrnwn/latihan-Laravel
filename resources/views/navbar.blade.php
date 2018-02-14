<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    @if (!empty($halaman)&& $halaman =='siswa')
    <li class="active"><a class="nav-link" href={{url('siswa')}} >Siswa
      <span class="sr-only">(current)</span></a>
    </li>        
    @else
        <li ><a class="nav-link" href="{{ url ('siswa') }}">Siswa</a></li>
    @endif
    @if (!empty($halaman)&& $halaman =='about')
    <li class="active"><a class="nav-link" href={{url('about')}} >About
      <span class="sr-only">(current)</span></a>
    </li>        
    @else
        <li ><a class="nav-link" href="{{ url ('about') }}">About</a></li>
    @endif


   </ul>
   <a class="btn btn-outline-primary" href="#">Login</a>
    
  </div>
</nav>
