<?php
 $name = "Gosho";
 $phone = "0882-321-423";
 $age = 24;
 $address = "Hadji Dimitar";

 echo "<table style='border: 1px solid black; border-collapse: collapse;'>";
 echo "<tr>
            <td style='border: 1px solid black; background-color: orange; padding: 5px;'><strong>Name</strong></td>
            <td style='border: 1px solid black; text-align: right; padding: 5px;'>$name</td>
        </tr>";
 echo "<tr>
            <td style='border: 1px solid black; background-color: orange; padding: 5px;'><strong>Phone Number</strong></td>
            <td style='border: 1px solid black; text-align: right; padding: 5px;'>$phone</td>
       </tr>";
 echo "<tr>
            <td style='border: 1px solid black; background-color: orange; padding: 5px;'><strong>Age</strong></td>
            <td style='border: 1px solid black; text-align: right; padding: 5px;'>$age</td>
        </tr>";
 echo "<tr>
            <td style='border: 1px solid black; background-color: orange; padding: 5px;'><strong>Address</strong></td>
            <td style='border: 1px solid black; text-align: right; padding: 5px;'>$address</td>
        </tr>";
 echo "</table>";