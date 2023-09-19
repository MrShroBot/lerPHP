<?php include __DIR__ . '/../pars/header.php'; ?>

  <div class="container">
    <h1 >New article</h1>
    <form action="/admin/articles" method="POST">
        <div class="field">
          <label class="label" for="title">Title</label>
          <div class="control">
            <textarea class="input" type="text" placeholder="Title" name="title" id="title"></textarea>
          </div>
        </div>
        <div class="field">
          <label class="label" for="body">Content</label>
          <div class="control">
            <textarea class="textarea" type="text" placeholder="Content..." name="body" id="body"></textarea>
          </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="button is-primary" type="submit">
            </div>
        </div>
    </form>
  </div>

<?php include __DIR__ . '/../pars/footer.php'; ?>