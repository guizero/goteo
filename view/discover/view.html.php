<?php

use Goteo\Core\View;

$bodyClass = 'home';

include 'view/prologue.html.php';

include 'view/header.html.php' ?>


        <div id="sub-header">
            <div>
                <h2 class="title"><?php echo $this['title']; ?></h2>
            </div>

        </div>

        <div id="main">
            <div class="widget projects promos">
                
                <?php foreach ($this['list'] as $project) : ?>
                    <div>
                        <?php
                        echo new View('view/project/widget/project.html.php', array(
                            'project' => $project
                            ));
                        ?>
                    </div>
                <?php endforeach; ?>
            </div>
        
        </div>        

        <?php include 'view/footer.html.php' ?>
    
<?php include 'view/epilogue.html.php' ?>