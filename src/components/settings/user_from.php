<?php require_once __DIR__ . "/../../services/src_route.php";
require_once __DIR__ . "/../../services/sql/methods.php";

$db_conn = connect_to_db();
[$query, $user_from] = select_data_from_where(
    "usuarios",
    "user = '$_SESSION[usuario]'",
    ["creation_date	"],
    $db_conn
);

?>

<p>Usuario dede: <?= $user_from["creation_date"] ?>
    <br/>
    <span class="text-gray-500 font-light">*la zona horaria puede variar dependiendo donde este ubicado</span>
</p>




