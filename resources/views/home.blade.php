
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <title>Todo List</title>
</head>

<body>
    <div class="container">
    <h1><i class="fa fa-list"></i> Todo List ::</h1>
        <p>กรองสถานะ : <a href="#">ทั้งหมด</a> | <a href="#">Completed</a> | <a href="#">Incomplete</a></p>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <i class="fa fa-list"></i> รายการที่ต้องทำ
            <span class="pull-right"><a href="/create" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> เพิ่มรายการ</a></span>
        </h4>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>ชื่อรายการ</th>
                <th>หมวดหมู่</th>
                <th>สถานะ</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($post as $items)
            <tr>
                <td>{{$items->id}}</td>
                <td>{{$items->details}}</td>
            <td>{{$items->category->name}}</td>
            <td>@if ($items->status==1)compiled @else field @endif</td>
                <td>
                    <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> edit</a>
                <a href="/delete/{{$items->id}}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$post->links()}}
        <hr>
        <p>&copy; 2017 Bundit Nuntates</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>

</html>
