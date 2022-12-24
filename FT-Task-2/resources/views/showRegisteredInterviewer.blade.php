@extends('layout.app')

@section('title')
Registered Interviewer
@endsection



@section('content')
<div id="i-root"></div>
<!-- <div class="container">
    <div class="row">
        <div class="col-lg-12 p-5">
            <a href="/createInterviewProfile" class="btn btn-primary btn-small">Add Interviewer Profile</a>
            <a href="/users" class="btn btn-primary btn-small">Show Users List</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Actions</th>
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
        url: "http://localhost:8000/api/getInterviewersList",
        dataType: "json",
        method: "GET",
        success: function(data) {
            data.forEach((val) => {
                let user = `<tr><td>${val.uname}</td>
                <td>${val.email}</td>
                <td>

                 <button id="deleteBtn-${val.id}" class="btn btn-danger btn-small ${val.id}">Delete</button>
                <a href="/updateInterviewProfile-${val.id}" class="btn btn-primary btn-small">Update<a>

                </td>
                `;
                $('.intListBody').append(user);
                $(`#deleteBtn-${val.id}`).on("click", (e) => {
                    let id = e.currentTarget.className.split(" ").pop();
                    $.ajax({
                        url: `http://localhost:8000/api/deleteInterviewer-${id}`,
                        dataType: "json",
                        method: "GET",
                        success: function(data) {
                            alert(data.msg);

                        },

                        error: function(data) {
                            console.log("Error occured sending request");
                        }


                    })
                })
            });
        },
        error: function(data) {
            console.log("Error occured getting data");
        }

    });
</script> -->
@endsection