<?php include __DIR__ . '/../pars/header.php'; ?>

  <div class="container">
    <form action="/login" method="POST">
        <div class="field">
          <label class="label" for="email">Email</label>
          <div class="control">
            <input class="input" type="email" placeholder="Email" name="email" id="email">
          </div>
        </div>
        <div class="field">
          <label class="label" for="password">Password</label>
          <div class="control">
            <input class="input" type="password" placeholder="Password" name="password" id="password">
          </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="button is-primary" type="submit" value="register">
            </div>
        </div>
    </form>
  </div>

<?php include __DIR__ . '/../pars/footer.php'; ?>