@foreach($approaches as $approach)
    <table border="1">
        <tr>
            <td>{{ $approach->approach_id }}</td>
            <td>{{ $approach->description }}</td>
        </tr>
    </table>
@endforeach
