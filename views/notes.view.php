<?php require(base_path("views/partials/head.php")) ?>
<?php require(base_path("views/partials/nav.php")) ?>
<?php require(base_path("views/partials/banner.php")) ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
   <ul class="list-none">
   <?php foreach($notes as $note): ?>
        <li>
            <a href="/note?id=<?php echo $note["id"] ?>" class="text-blue-500 hover:underline"><?= $note["note"] ?></a>
        </li>
    <?php endforeach; ?>
   </ul>
   <p class="mt-4">
    <a href="/notes/create" class="text-blue-600 hover:underline">Create note</a>
   </p>
  </div>
</main>
<?php require(base_path("partials/footer.php")) ?>