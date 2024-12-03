<?php require(base_path("views/partials/head.php")) ?>
<?php require(base_path("views/partials/nav.php")) ?>
<?php require(base_path("views/partials/banner.php")) ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <a href="/notes" class="text-blue-600 underline mb-6">Back to notes</a>
    <p class="text-blue-500"><?= $note["note"] ?></p>
    <form action="/note" method="post">
      <input type="hidden" name="note-id" value="<?= $note['id'] ?>">
      <input type="hidden" name="_method" value="DELETE">
      <button type="submit" class="text-red-600">Delete</button>
    </form>
  </div>
</main>
<?php require(base_path("views/partials/footer.php")) ?>