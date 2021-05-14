@if(count($users) > 0)
    <ul class="list-unstyled">
        @foreach ($users as $user)
            <li class="media">
                <img class="mr-2 rounded" src="{{ Gravatar::get($user->emal,['size' => 50]) }}" alt="">
                <div class="media-body">
                    <div>
                        {{ $user->name }}
                    </div>
                    <div>
                        <p>{!! link_to_route('users.show','view profile',['user'->id]) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    
    {{ $users->links() }}
    
@endif