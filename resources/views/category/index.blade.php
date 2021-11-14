@foreach($data as $category)
    <table>

        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->description }}</td>
        </tr>

    </table>

@endforeach