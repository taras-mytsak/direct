<h2>Меню</h2>
<?php if (isset($cats)) :?>
    <?php echo renderTemplate('menu_part.php', ['cats' => $cats]);?>
<?php endif; ?>
