<?php
$menus = \frontend\components\Helper::getMenus();
?>

<header class="">
    <div class="container example5">
        <nav class="navbar navbar-default custom_navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed custom_navbar-toggle" data-toggle="collapse" data-target="#navbar5">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img style="	width: 100px;" src="../images/logo.svg" alt="logo">
                    </a>
                </div>
                <div id="navbar5" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right" style="    margin-right: 100px;">
                        <?php foreach ($menus as $menu): ?>
                            <li><a href="<?= $menu->url ?>"><?= $menu->{'name_' . Yii::$app->language} ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--/.nav-collapse -->
                <div class="languages">
                    <a href="/am">am</a> /
                    <a href="/ru">ru</a> /
                    <a href="/en">en</a>
                </div>
            </div>
            <!--/.container-fluid -->
        </nav>

    </div>
</header>