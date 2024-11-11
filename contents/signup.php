<div class="form-container">
     <div class="card">
          <div class="card-body">
               <h3 class="card-title text-center">สมัครสมาชิก</h3>
               <form action="register-process.php" method="POST">
                    <div class="mb-3">
                         <label for="username" class="form-label">Username</label>
                         <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                         <label for="email" class="form-label">Email</label>
                         <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                         <label for="password" class="form-label">Password</label>
                         <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class=" rounded-pill w-100 btn-rose ">Register</button>
               </form>
               <p class="text-center mt-3">
                    Already have an account? <a href="signin-form.php">Login</a>
               </p>
          </div>
     </div>
</div>