<nav class="navbar nav-bg ">
     <div class="container-fluid d-flex justify-content-between align-items-center">
          <div>
               <a class="navbar-brand text-white fw-bold me-auto">Carenet</a>
          </div>
          <form class="search-box " role="search">
               <input class="form-control me-2 w-full rounded-pill custom-input" type="search" placeholder="Search"
                    aria-label="Search">
          </form>
          <div>
               <?php include('btn-profile.php');  ?>
               <!-- <a href="signin-form.php" class="btn btn-light rounded-pill px-3 me-2">Login</a> -->
          </div>
     </div>
</nav>

<style>
.nav-bg {
     background-color: #f43f5e;
}

.search-box {
     min-width: 500px;

}

.custom-input {
     border: 2px solid white;
     /* ตั้งค่าเส้นขอบ */
     outline: none;
     /* ลบเส้นขอบเวลาที่ถูกคลิก */
}

.custom-input:focus {
     border-color: #ffc107;
     /* ตั้งค่าสีของเส้นขอบเมื่อถูกโฟกัส */
     box-shadow: 0 0 5px #ffc107;
     /* เพิ่มเงาเมื่อถูกโฟกัส */
}
</style>