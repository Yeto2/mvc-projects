<?php
    include '../data/dbCon.php';
    // get data to get club data
    $sql = "SELECT cl_name , id_club FROM clubs";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        
    } catch (Exeption $e) {
        echo ($e->getMessage());
    }
    
?>
<form action="../data/registerData.php" method="POST">
    <div class="modal-body">
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" required>
                <div id="nameHelp" class="form-text text-danger pt-2"></div>
        <div>
        <div class="mb-3 mt-3">
            <label for="classN" class="form-label">Class</label>
            <input type="text" class="form-control" id="classN" name="classN" required>
                <div id="classHelp" class="form-text text-danger pt-2"></div>
        <div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailRegister" aria-describedby="emailHelp" name="emailRegister" required>
                <div id="emailHelp" class="form-text text-danger pt-2"></div>
        </div>
        <div class="mb-3 mt-3">
            <label for="select" class="form-label">Club</label>
            <select class="form-select" id="select" aria-label="Default select example" name="clubs" required>
                <option value="nada" selected>Open this select menu</option>
                <?php foreach ($results as $result ){ ?>
                    <option value=<?php echo $result["id_club"] ?> ><?php echo $result["cl_name"] ?></option>
                
                <?php } ?>

            </select>
                <div id="clubHelp" class="form-text text-danger pt-2"></div>
        </div>
        <div class="mb-3">
            <label for="cne" class="form-label">C N E</label>
            <input type="text" class="form-control" id="cartNat" name="cartNat" required>
                <div id="cneHelp" class="form-text text-danger pt-2"></div>
        <div>
    
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="submit" class="btn btn-primary" name="submit">Register</button>
        </div>
    </div>
</form>