<?php 

include_once '../model/database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $bookID = $_GET['ID'];
    $newBookName = $_POST['newbookname'];

    $query = "UPDATE books SET BOOK=? WHERE ID=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('si',$newBookName, $bookID);

    if ($stmt->execute()) {
        header("Location: ../includes/main.php");
        exit;
    }
}


?>


<div class="modal" tabindex="-1" id="editBookModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-body-secondary">
            <div class="modal-header">
                <h5 class="modal-title"> Edit Book </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">    <!-- form -->
                <form method="post">
                    <input class="w-100 p-3 rounded-3 border border-dark" type="text" name="newbookname" placeholder="Enter New Book Name" required>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info text-dark">Save Changes <i class="bi bi-floppy"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('editBookModal').addEventListener('show.bs.modal', event => {
        const ID = event.relatedTarget.getAttribute('data-book-id');
        document.querySelector('#editBookModal form').action="../view/update.php?ID=" + ID;
    });
</script>