<div class="container">
<?php
   
        if (isset($_GET['content'])) 
        {
            if (file_exists('pagina-bezoeker/' . $_GET['content'] . '.php')) {
                include 'pagina-start/' . $_GET['content'] . '.php';
            }
            elseif (file_exists('scripts/' . $_GET['content'] . '.php'))
            {
                include 'scripts/' . $_GET['content'] . '.php';
            }
            elseif (file_exists('pagina/' . $_GET['content'] . '.php'))
            {
                include 'pagina/' . $_GET['content'] . '.php';
            }
        }
           
    ?>
</div>