<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>about</title>
     <link rel="stylesheet" href="lib/bootstrap.min.css">
</head>


<body>
     <!-- navbar -->
     <header>
          <?php include('components/navbar.php'); ?>
     </header>
     <!-- end navbar -->
     <aside class="container-fluid">
          <div class="row">
               <!-- Sidebar -->
               <?php include('components/sidebar.php'); ?>

               <!-- Content area -->
               <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    <?php include('contents/about.php'); ?>
               </main>
          </div>
     </aside>

     <script src="/lib/bootstrap.bundle.js"></script>
     <script src="/lip/jquery.js"></script>


</body>



</html>