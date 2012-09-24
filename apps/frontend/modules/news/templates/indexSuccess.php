<h1>Newss List</h1>

<div class="contenedor">    
    <?php foreach ($newss as $news): ?>
        <div class="noticia">
            <div class="noticia_titulo">                
                <a href="<?php echo url_for('news/edit?id='.$news->getId()) ?>"><?php echo $news->getTitle() ?></a>
            </div>
            <div class="noticia_imagen">
                <img src="<?php echo $news->getImage() ?>" alt="<?php echo $news->getTitle() ?>" />
            </div>
            <div class="noticia_descripcion">
                <?php echo $news->getBrief() ?>
            </div>
            <div class="noticia_body">
                <?php echo $news->getBody() ?>
            </div>           
            <ul class="tags">
                <?php
                $tags = $news->getTags();
                foreach ($tags as $tag)
                {
                    
                    echo '<li><a href="#">'.$tag->getName().'</a></li>';
                }
                ?>
            </ul>
        </div>     
    <?php endforeach; ?>
    <div class="noticia_nueva_btn">
         <a href="<?php echo url_for('news/new') ?>">Agregar Noticia</a>
    </div>
     
</div>

