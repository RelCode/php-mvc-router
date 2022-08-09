<header class="header">
    <nav class="navbar">
        <a href="./" class="nav-logo"><?= APP_NAME ?></a>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="./heroes/list" class="nav-link">Heroes</a>
            </li>
            <li class="nav-item">
                <a href="./post" class="nav-link">Post</a>
            </li>
            <li class="nav-item">
                <a href="./query/?query=queryStringValue" class="nav-link">String Query</a>
            </li>
            <li class="nav-item">
                <a href="./not-found" class="nav-link">Does Not Exist</a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>