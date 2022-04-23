@foreach($salons as $salon)
    <tr>
        <div>{{ $salon->name }}</div>
        <div>{{ $salon->address }}</div>
        <div>{{ $salon->assessment }}</div>
    </tr>
@endforeach
