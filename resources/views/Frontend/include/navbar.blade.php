<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="/">{{config('app.name', 'laravelBlogApp')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>

             
            @guest
            
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{$user->first_name}} {{$user->last_name}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                        </a>

                        <li class="nav-item ">
                     <a class="nav-link" href="{{route('editRegularUsers', $user->id) }}">Update Info <span class="sr-only"></span></a>
                     <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletuser{{$user->id}}">Delete</button>

                     <div class="modal fade" id="deletuser{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this ?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    <form action="{{route('deleteRegularUsers', $user->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                        </a>
                                    </form>
                                  
                                </div>
                              </div>
                            </div>

                     
                      </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
            @endguest
        </ul>
    </div>
</nav>