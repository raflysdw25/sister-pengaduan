
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLoginLongTitle">Masuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
            <div class="form-group">
                <label for="uName">Username</label>
                <input type="text" class="form-control" id="uName" placeholder="Masukkan username..." name="uName" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password..." name="password" required>
            </div>
            <a href="#" class="btn-forgot-pwd"  style="text-decoration: none; font-size: 12px;">Lupa password?</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" name="login" class="btn btn-cta">Masuk</button>
        </form>
      </div>
    </div>
  </div>
</div>