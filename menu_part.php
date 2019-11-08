<link rel="stylesheet" href="style.css">
<ul>

    <?php foreach ($cats as $cat) : ?>
        <li><a href="/categiry/<?php echo $cat['id']; ?>"><?php echo $cat['title']; ?></a></li>
        <?php if (count($cat['children']) > 0) : ?>
            <?php echo renderTemplate('menu_part.php', ['cats' => $cat['children']]); ?>
        <?php endif; ?>
    <?php endforeach; ?>

</ul>
