<?php
$rows = mysql_query("SELECT * FROM news ORDER BY time DESC LIMIT 5");

if(mysql_num_rows($rows)):
    ?>
    <div class="lastNews">
        <h4>Последние новости</h4>
        <div class="list-group">
            <?php while($row = mysql_fetch_assoc($rows)): ?>
                <a href="/modules/news/view.php?id=<?=$row['id']?>" class="list-group-item"><?=$row['title']?></a>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>

<?php
$rows = mysql_query("SELECT * FROM articles ORDER BY time DESC LIMIT 5");

if(mysql_num_rows($rows)):
    ?>
    <div class="lastArticles">
        <h4>Последние статьи</h4>
        <div class="list-group">
            <?php while($row = mysql_fetch_assoc($rows)): ?>
                <a href="/modules/news/view.php?id=<?=$row['id']?>" class="list-group-item"><?=$row['title']?></a>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>