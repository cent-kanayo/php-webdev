<?php require(base_path("views/partials/head.php")) ?>
<?php require(base_path("views/partials/nav.php")) ?>
<?php require(base_path("views/partials/banner.php")) ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form action="/notes" method="post" class="w-full">
       <div class="inline-flex flex-col gap-2">
       <label class="text-xl font-medium" for="body">Note body</label>
        <textarea name="body" id="body"></textarea>
        <button class="bg-blue-500 text-white p-2 rounded-md" type="submit">Submit</button>
       </div>
       <p><?= $errors["body"] ? $errors["body"] : "" ?></p>
    </form>
  </div>
</main>
<?php require(base_path("views/partials/footer.php")) ?>