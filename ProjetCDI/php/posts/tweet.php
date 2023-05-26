             <?php 
            require_once './database.php';

            $query = 'SELECT * FROM articles';
            $recup = $database->query($query);
            $posts = $recup->fetchAll();
            
            foreach($posts as $post):

            ?>

            /* <div style="background-color:#73b9db;border-radius:10px;border:3px solid grey;font-family:IrishGrover;";>
              <h1><?php echo $post['titre']; ?></h1>
              <h1 class="policecontenu"><?php echo $post['contenu']; ?></h1>
              <h3 class="modif"><?php echo $post['date']; ?></h3>
              <form method="POST" action="delete.php">
                <input type="hidden" name="post_id" value="<?php echo $post['id']?>">
                <h3> <?php echo $post['tag']; ?> </h3>
              <button type="submit" class="btn btn-dark" style="font-family:IrishGrover;margin-left:360px;color:#4abdf4;background-color: gray;">supprimer</button>
            </form>
            </div> */

            <?php endforeach; ?>
