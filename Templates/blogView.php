<ul>
    <?php foreach ($blogs as $blog): ?>
    <li> <?= $blog->getTitle() ?></li>
    <?php endforeach; ?>
</ul>