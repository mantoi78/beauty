@foreach($favorites as $favorite)
    <div>{{ $favorite->session_id }}</div>
    <div>{{ $favorite->approach_id }}</div>
@endforeach
