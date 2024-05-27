<?php

include_once '../model/database.php';

$query = "SELECT * FROM books";
$stmt = $conn->prepare($query);
$stmt->execute();

$result = $stmt->get_result();
// $data = $result->fetch_assoc();

// var_dump($data);

while ($row = $result->fetch_assoc()): ?>
    <div class="col">
        <div class="card">
            <img src="books-sample.jpg" class="card-img-top">
            <div class="card-body d-flex flex-column justify-content-end w-100 p-1">
                <h6 class="fw-semibold me-auto"> <?php echo $row['BOOK'] ?></h6>

                <div class="container d-flex justify-content-end">
                    <span data-bs-toggle="modal" data-bs-target="#editBookModal" data-book-id="<?php echo $row['ID']?>"><i class="bi bi-pencil text-dark fs-5 me-3"></i></span>
                    <a href="../view/delete.php?ID=<?php echo $row['ID']?>">
                        <span><i class="bi bi-trash text-dark fs-5"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php endwhile ?>
<?php include '../view/update.php';?>
