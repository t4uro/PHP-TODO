<?php 
    require_once '_inc/config.php';


    $item = $database->get("items", "text", [
        "id" => $_GET["id"]
    ]);

    if ( !$item ) {
        header("HTTP/1.0 404 Not Found");
        include_once "404.php";
        die();
    }

    include_once '_partials/header.php';

?>

    <div class="container">
        
        <div class="page-header">
            <h1>Delete Page</h1>
        </div>
    
    <div class="row">
        <form id="delete-form" class="col-sm-6" action="_inc/delete-item.php" method="POST">
            <div class="form-group">
                <textarea disabled class="form-control" name="message" id="text" cols="30" rows="1" placeholder="Say something"><?php echo $item ?></textarea>
            </div>
            
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <button class="btn btn-danger">Delete Item</button>
                <span class="controls">
                    <a href="<?php echo $base_url ?>">Go back</a>
                </span>
            </div>
        </form>
    </div>    
       
    </div>


<?php include_once '_partials/footer.php' ?>