<form action="data/loginData.php" method="POST">
    <div class="modal-body">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="login" aria-describedby="loginHelp" name="user" required>
                <div id="loginHelp" class="form-text text-danger pt-2"></div>
        </div>

        <div class="mb-3">
            <label for="cne" class="form-label">C N E</label>
            <input type="text" class="form-control" id="cneLog" name="cneLog" required>
                <div id="cneLogHelp" class="form-text text-danger pt-2 pb-2"></div>
        <div>
    
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="submitLog" class="btn btn-primary" name="login">Login</button>
        </div>
    </div>
</form>