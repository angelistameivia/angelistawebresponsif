<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card mt-5">
              <div class="card-header">
                <strong class="text-center d-block">Form <span class="text-primary">Register</span></strong>
              </div>
              <div class="card-body">
                <form action="/simpanuser" method="POST">
                  <?php echo csrf_field(); ?>
                  <div class="form-group">
                    <label for="">Nama Pengguna</label>
                    <input type="text"
                      class="form-control" autofocus required name="nama">
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email"
                      class="form-control" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password"
                      class="form-control" name="password"  >
                  </div>
                  <div class="form-group">
                    <input name="" id="" class="btn btn-primary" type="submit" value="Sign Up">
                  </div>
                  <small>Sudah punya akun?<a href="#"> login</a> sekarang</small>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH D:\Project\WEB\coba bisa hapus\ferdihermawan\resources\views/register.blade.php ENDPATH**/ ?>