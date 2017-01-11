
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'vendor/autoload.php';
        $html = new simple_html_dom();
        echo $html = file_get_html('https://multiplex.ua/movie/29789');
       // echo $html->find('body > div.mob_fix_container > div.movie_info > div.column2 > ul');
//        foreach ($h as $q){
//            echo $q->find('tr:');        
//        }
        $html->clear();
        unset($html);
        ?>
    </body>
</html>
