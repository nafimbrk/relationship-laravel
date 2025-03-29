<x-layout title="Ektracurricular">
    <h3>Ektracurricular List</h3>
    <table class="table">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Anggota</th>
        </thead>
        <tbody>
            @foreach ($ekskulList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @foreach ($data->students as $item)
                        - {{ $item->name }} <br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </x-layout>
