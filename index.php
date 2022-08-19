<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot using PHP & MySQL</title>
    <link rel="stylesheet" href="style.css">
    <!-- CDNS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
 
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
 <!-- Bootstrap Css -->
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">



</head>
<body style='background-color:#787878;'>
    <div class="wrapper">
        <div class="title" style="background-color:#49094f;color:white;">Chat with Shimanta</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                <img src="mypic.jpeg" class="icon">
                </div>
                <div class="msg-header">
                    <p>Hi,how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="term" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
<script type="text/javascript">
  $(function() {
     $( "#term" ).autocomplete({
       source: 'ajax-db-search.php',
     });
  });
</script>


    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#term").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#term").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"> <div class="icon"><img src="mypic.jpeg" class="icon"></div> <div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    
</body>
</html>