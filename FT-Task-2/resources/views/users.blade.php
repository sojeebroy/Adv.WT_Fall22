@extends('layout.app')

@section('title')
Users List
@endsection



@section('content')
<div id="u-root"></div>
<!-- <div class="container">
    <div class="row">
        <div class="col-lg-12 p-5">
            <a href="/" class="btn btn-primary btn-small">Show Registered Interviewer List</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>User name</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>

                </thead>

                <tbody class="intListBody">

                </tbody>

            </table>

        </div>
    </div>
</div>
<script>
    $.ajax({
        url: "http://localhost:8000/api/getusersList",
        dataType: "json",
        method: "GET",
        success: function(data) {
            data.forEach((val) => {
                let user = `<tr><td>${val.uname}</td>
                <td>${val.mail}</td>
                <td>${val.role}</td>
                `;
                $('.intListBody').append(user);
            });
        },
        error: function(data) {
            console.log("Error occured getting data");
        }

    })
</script> -->
@endsection