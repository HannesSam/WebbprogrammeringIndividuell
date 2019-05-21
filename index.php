    <?php
    include 'include/views/_header.php';
    ?>
    <div class="postsDiv hiddenDivs" id="makePostDiv">
        <form>
            <input id="headerPost" type="text" placeholder="Header" name="header">
            <br>
            <textarea name="text" id="textPost" cols="30" rows="10" placeholder="Text" name="text"></textarea>
            <br>
            <input id="submitPost" type="submit">
        </form>
    </div>
    <div class="postsDiv hiddenDivs" id="registerDiv">
        <form name="form">
            <input id="userNameRegister" type="text" name="userName" placeholder="userName" />
            <br />
            <h3>E-mail:</h3>
            <input id="emailRegister" type="text" name="email" placeholder="Email" />
            <br />
            <h3>Lösenord:</h3>
            <input type="password" name="password" placeholder="Lösenord" />
            <button id="submitRegister" type="submit"></button>
    </div>
    <?php
    include 'include/views/_post-list.php';
    include 'include/views/_footer.php';
    ?>