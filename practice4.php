<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>EECS 348 Lab 6, Practice 4</h1>
        <form method="POST">
            <p>Size input: <input type="text" name="table_size" values=""></p>
            <button type="submit">Submit</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $table_size = intval($_POST["table_size"]);
        }
        if ($table_size < 1){
            echo "<p>Enter a number greater than 0."
        } else{
            echo "<table>";
            echo "<tr><td></td>";
            for ($column_header = 1; $column_header <= $table_size; $column_header++)(
                echo "<td>$column_header</td>";
            )
            echo "</tr>";

            for ($row_header = 1; $row_header <= $table_size; $row_header++){
                echo "<tr>";
                echo "<td>$row_header</td>"; 
                for ($column_value = 1; $column_value <= $table_size; $column_value++ ){
                    echo "<td>", ($row_header * $column_value), "</td>";
                }
                echo "</tr>"
            }
            echo "</table>";
        }
        ?>
    </body>
</html>