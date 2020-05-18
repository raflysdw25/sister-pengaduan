<div class="modal fade" id="modalSignup" tabindex="-1" role="dialog" aria-labelledby="modalSignupTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSignupLongTitle">Buat Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email..." name="email" required>
            </div>
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap..." name="name" required>
            </div>
            <div class="form-group">
                <label for="number">Nomor Handphone</label>
                <input type="number" class="form-control" id="no_hp" placeholder="Masukkan nomor handphone..." name="number" required>
            </div>
            <div class="dropdown-divider"></div>
            <div class="form-group">
                <label for="uName">Username</label>
                <input type="text" class="form-control" id="uName" placeholder="Masukkan username..." name="uName" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password..." name="password" required>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-cta">Daftar</button>
      </div>
    </div>
  </div>
</div>