<base href="{{URL::asset('/')}}" target="_top">
<link rel="stylesheet" href="{{{ URL::asset('css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{ URL::asset('font-awesome/4.2.0/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{ URL::asset('fonts/fonts.googleapis.com.css')}}}">
<div class="main-container" id="main-container">
    <div class="main-content">

        <table class="table table-striped table-bordered table-hover" id="emp_list">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $key => $emp)
            <tr>
                <td>{{ $emp->id }}</td>
                <td>{{ $emp->employee_name }}</td>
                <td>{{ $emp->employee_salary }}</td>
                <td>{{ $emp->employee_age }}</td>
                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('employee/' . $emp->id) }}">Show</a>
                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('employee/' . $emp->id . '/edit')}}">Edit</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="{{{ URL::asset('js/jquery.2.1.1.min.js')}}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="{{{ URL::asset('js/jquery.dataTables.min.js')}}}"></script>
    <script src="{{{ URL::asset('js/jquery.dataTables.bootstrap.min.js')}}}"></script>
</div>
