
$(document).ready(function(){


    $('#destination').DataTable();
    $('#posts').DataTable();
    $('#users').DataTable();
    //check current status
    $("#current_password").keyup(function(){
        var current_password = $("#current_password").val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type : 'post',
            url : '/admin/check-current-password',
            data : {current_password:current_password},
            success : function(res){
                if(res =="false"){
                    $("#check_password").html("<font color='red'> current password is incorrect! </font>");
                }
                else if(res =="true"){
                    $("#check_password").html("<font color='green'> current password is correct! </font>");
                }
            },
            error : function(){
                
            }

        });
    });

     //confirm delete sweet alert
     $(document).on("click",".confirmDelete",function(){
        var module = $(this).attr("module");
        var moduleid = $(this).attr("moduleid");
        //var name = $(this).attr("name");

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              window.location = "/admin"+"/"+"/delete-"+module+"/"+moduleid;
            }

          })
    });  

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('defa33b4a2087fc9bf2e', {
        cluster: 'us2'
    });

    var channel = pusher.subscribe('travelblog-channel');
    channel.bind('user-register', function(data) {
        alert(JSON.stringify(data));
    });

});