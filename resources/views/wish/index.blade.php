@foreach($wishes as $wish)
    <div>{{ $wish->part_id }}</div>
    <div>{{ $wish->name }}</div>
@endforeach
