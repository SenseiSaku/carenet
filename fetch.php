<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <h1>test fetch </h1>
     <ul id="usersList"></ul>


     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <script>
     $(document).ready(function() {
          $.ajax({
               url: 'api/users/read.php',
               type: 'GET',
               success: function(response) {
                    response.data.forEach(function(user) {
                         $('#usersList').append('<li>' + user.name + '</li>');
                    });
               }
          });
     });
     </script>
</body>

</html>