<!DOCTYPE html>
<html>
<head>
    <title>Safety Tips Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        img {
            width: 80px;
            height: auto;
        }
    </style>
</head>
<body>

    <h1>Safety Tips - Table View</h1>

  <table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>

  @if(isset($tips) && $tips->count())
    @foreach($tips as $tip)
    <tr>
        <td>{{ $tip->id }}</td>
        <td>{{ $tip->title }}</td>
        <td>{{ $tip->description }}</td>
        <td>
            @if($tip->image)
                <img src="{{ asset('uploads/safetytips/'.$tip->image) }}" width="80">
            @else
                No Image
            @endif
        </td>
        <td>
            {{-- Edit button --}}
            <a href="{{ url('/safetytip/edit/'.$tip->id) }}">Edit</a> |

            {{-- Delete button --}}
            <a href="{{ url('/safetytip/delete/'.$tip->id) }}" 
               onclick="return confirm('Are you sure you want to delete this?')">
                Delete
            </a>
        </td>
    </tr>
    @endforeach
@endif

</table>


</body>
</html>