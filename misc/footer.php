<div class="footer-container">
    <a href="./">LibreY.ghos.tr</a>
    <a href="https://github.com/mutix31/librey/" target="_blank"><?php printtext("source_code_link");?></a>
    <a href="./instances.php" target="_blank"><?php printtext("instances_link");?></a>
    <a href="./settings.php"><?php printtext("settings_link");?></a>
    <?php if(!$opts->disable_api) {
        echo '<a href="./api.php" target="_blank">', printtext("api_link"), '</a>';
    } ?>
    <a href="./donate.php"><?php printtext("donate_link");?></a>
</div>
<div class="git-container">
    <?php
        if (file_exists(".git/refs/heads/main")) {
          $hash = file_get_contents(".git/refs/heads/main");
        }

        echo "<a href='https://github.com/Ahwxorg/Librey/commit/$hash' target='_blank'>" . printftext("latest_commit", $hash) . "</a>";
    ?>
</div>
</body>
</html>
