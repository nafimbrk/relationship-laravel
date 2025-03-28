<x-layout title="Class">
    <h3>Class List</h3>
    <table class="table">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Students</th>
        </thead>
        <tbody>
            @foreach ($classList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @foreach ($data->students as $student)
                            - {{ $student->name }} <br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </x-layout>
