<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li><a href="{{ route('all') }}">Todos los usuarios (ALL)</a></li>
    <li><a href="{{ route('get', 'f') }}">Lista de usuarios (Femenino) (GET)</a></li>
    <li><a href="{{ route('get', 'm') }}">Lista de usuarios (Masculino) (GET)</a></li>
    <li><a href="{{ route('get-custom') }}">Lista de usuarios (GET con array)</a></li>
    <li role="separator" class="divider"></li>
    <li class="dropdown-header">Nav header</li>
    <li><a href="#">Separated link</a></li>
    <li><a href="#">One more separated link</a></li>
  </ul>
</li>