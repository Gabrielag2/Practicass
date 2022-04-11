<div>
    {{-- Be like water. --}}
</div>

<table>
    <thead>
        <tr>
            <td>#</td>
            <td>name</td>
            <td>age</td>
        </tr>
    </thead>
    <tbody>
        @foreach($pets as $pet)
        <tr>
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->age }}</td>
        </tr>
        @endforeach
    </tbody>
</table>