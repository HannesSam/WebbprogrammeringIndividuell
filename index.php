    <?php
    include 'include/views/_header.php';
    ?>

    <div class="postsDiv hiddenDivs" id="makePostDiv">
        <?php
        include 'include/views/_postDiv.php';
        ?>
    </div>

    <div class="postsDiv hiddenDivs" id="registerDiv">
        <?php
        include 'include/views/_registerDiv.php';
        ?>
    </div>

    <div id="containerForPosts">
        <?php
        include '_post-list.php';
        ?>
    </div>
    <?php
    include 'include/views/_footer.php';
    ?>