<?php require(base_path("views/partials/head.php")) ?>
<?php require(base_path("views/partials/nav.php")) ?>
<?php require(base_path("views/partials/banner.php")) ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <a href="/notes" class="text-blue-600 underline mb-6">Back to notes</a>
        <li>
            <p class="text-blue-500"><?= $note["note"] ?></p>
        </li>
  </div>
</main>
<?php require(base_path("partials/footer.php")) ?>