<?php

require '../DBConnection/dbCon.php';

function getCustomerList()
{

    global $connection;
    $sql = "SELECT * FROM customer";
    $query_run = mysqli_query($connection, $sql);

    if ($query_run) {
        if (mysqli_num_rows($query_run) > 0) {
            $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

            $data = [
                'status' => 200,
                'message' => 'Customers fetch successfully',
                'data' => $res,
            ];
            header("HTTP/1.0 200 OK");
            return json_encode($data);
        } else {
            $data = [
                'status' => 404,
                'message' => 'No records found',
            ];
            header("HTTP/1.0 404 No records found");
            return json_encode($data);
        }

    } else {
        $data = [
            'status' => 500,
            'message' => 'Internal server error',
        ];
        header("HTTP/1.0 500 Internal server error");
        return json_encode($data);
    }
}

?>