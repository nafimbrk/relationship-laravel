<x-layout title="Teacher">
    <h3>Teacher List</h3>
    <table class="table">
        <thead>
            <th>#</th>
            <th>Name</th>
        </thead>
        <tbody>
            @foreach ($teacherList as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </x-layout>
