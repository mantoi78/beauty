@foreach($approaches as $approach)
    <div>{{ $approach->wish_id }}</div>
    <div>{{ $approach->name }}</div>
    <div>{{ $approach->description }}</div>
@endforeach
