<div class="card card-width">
     <div class="card-body">
          <!-- ส่วนโปรไฟล์ -->
          <div class="d-flex align-items-start">
               <img src="https://plus.unsplash.com/premium_photo-1691784781482-9af9bce05096?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjF8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D"
                    width="40" height="40" alt="a girl" class="rounded-circle me-2">
               <div>
                    <div class="d-flex align-items-center">
                         <p class="fw-bold mb-0">ชื่อผู้ใช้</p>
                         <small class="text-muted ms-2">วันที่ 1/06/24</small>
                    </div>
                    <p class="card-text mt-1">Some quick example text to build on the card title and make up the bulk of
                         the card's content.</p>
                    <img src="https://images.unsplash.com/photo-1512236258305-32fb110fdb01?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHBvc3R8ZW58MHx8MHx8fDA%3D"
                         class="card-img-top my-2" alt="example">
                    <div class="d-flex justify-content-between align-items-center mt-2">
                         <div>
                              <button class="btn btn-sm btn-light rounded-pill me-2">Like</button>
                              <a href="#com" class="btn btn-sm btn-light rounded-pill me-2">Reply</a>
                         </div>
                         <div>

                              <button class="btn btn-sm btn-light rounded-pill me-2 ">
                                   10view
                              </button>
                         </div>

                    </div>
               </div>
          </div>
     </div>
</div>

<!-- ส่วนแสดงความคิดเห็น -->
<div class="mt-3 card-width">
     <form action="">
          <textarea name="" class="form-control" placeholder="แสดงความคิดเห็น"></textarea>
          <div class="d-flex justify-content-end mt-2">
               <button type="reset" class="btn btn-light rounded-pill me-2">ยกเลิก</button>
               <button type="submit" class="btn-rose rounded-pill">ยืนยัน</button>
          </div>
     </form>
</div>

<!-- ส่วนแสดงความคิดเห็นเพิ่มเติม -->
<div class="card-width mt-5" id="com">
     <h5>ความคิดเห็น 10</h5>

     <!-- Comment เดี่ยว -->
     <?php for ($i = 0; $i < 10; $i++) : ?>
          <div class="card w-75 mb-3">
               <div class="card-body">
                    <div class="d-flex align-items-start">
                         <img src="https://plus.unsplash.com/premium_photo-1691784781482-9af9bce05096?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjF8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D"
                              width="40" height="40" alt="a girl" class="rounded-circle me-2">
                         <div>
                              <div class="d-flex align-items-center">
                                   <p class="fw-bold mb-0">ชื่อผู้ใช้</p>
                                   <small class="text-muted ms-2">วันที่ 1/06/24</small>
                              </div>
                              <p class="card-text mt-1">With supporting text below as a natural example.</p>
                              <div class="d-flex align-items-center mt-2">
                                   <button class="btn btn-sm btn-light rounded-pill me-2">Like</button>
                                   <button class="btn btn-sm btn-light rounded-pill me-2">Reply</button>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     <?php endfor; ?>
</div>