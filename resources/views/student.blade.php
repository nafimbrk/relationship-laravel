<x-layout title="Student">
<h3>Student List</h3>
{{ $studentList[0]['extracurriculars'][0]['name'] }}
<table class="table">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Nis</th>
        <th>Class</th>
        <th>Extracurricular</th>
        <th>Homeroom Teacher</th>
    </thead>
    <tbody>
        @foreach ($studentList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->nis }}</td>
                <td>{{ $data->class->name }}</td>
                <td>
                    @foreach ($data->extracurriculars as $item)
                        - {{ $item->name }} <br>
                    @endforeach
                </td>
                <td>
                    {{ $data->class->homeroomTeacher->name }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</x-layout>
