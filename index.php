<?php include_once '_partials/header.php' ?>

      <div class="container">
       
        <div class="page-header">
            <h1>Easy ToDo List</h1>
        </div>

        <?php

            $data = $database->select('items', ['id', 'text']);

        ?>
       
        <ul id="item-list" class="list-group col-sm-6">
            <?php 
                foreach( $data as $item ) {
                    echo '<li id="item-'. $item['id'] .'" class="list-group-item">';
                    echo    $item['text'];
                    echo '  <div class="controls pull-right">';
                    echo '       <a href="edit.php?id='. $item['id'] .'" class="edit-link">edit</a>';
                    echo '       <a href="delete.php?id='. $item['id'] .'" class="delete-link glyphicon glyphicon-remove text-muted"></a>';
                    echo '  </div>';
                    echo '</li>';
                }
            ?>
        </ul>

        <form id="add-form" class="col-sm-6" action="_inc/add-item.php" method="POST">
            <div class="form-group">
                <textarea class="form-control" name="message" id="text" cols="30" rows="3" placeholder="Add new item..."></textarea>
            </div>
            
            <div class="form-group">
                <button class="btn btn-danger">Submit</button>
            </div>
        </form>
    </div>


<?php include_once '_partials/footer.php' ?>