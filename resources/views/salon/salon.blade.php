@foreach($salons as $salon)
    <tr>
        <td>{{$salon->name}}</td>
        <td>{{$salon->address}}</td>
        <td>{{$salon->assessment}}</td>
    </tr>
    @endforeach
