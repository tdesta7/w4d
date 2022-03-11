<x-layout>

    <!-- /resources/views/components/alert.blade.php -->

    <h3>Tools List</h3>

       <table>
        <tr>
            <th>Title</th>
            <th>Year of product</th>
            <th>Model Number</th>
        </tr>

        @foreach ($tools as $tool)
        <tr>
            <td>{{ $tool->title }}</td>
            <td>{{ $tool->yearofproduct }}</td>
            <td>{{ $tool->modelNumber }}</td>
        </tr>
        @endforeach
    </table>
</x-layout>
