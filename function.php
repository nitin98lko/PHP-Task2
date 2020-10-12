<?php
include_once 'config.php';
$html_table = '<table >  <tr>  <th>product</th>   <th>$price</th>    <th>Quantity</th>   <th>netprice</th>  <th>Action</th>    </tr>';
foreach ($_SESSION['basket'] as $basketkey => $basketvalue) {
	$html_table .=
		'<tr>
<td>' . $_SESSION['basket'][$basketkey]['prodname'] . '</td>
<td>' . $_SESSION['basket'][$basketkey]['price'] . '</td>
<td>' . $_SESSION['basket'][$basketkey]['quantity'] . '</td>
<td>' . $_SESSION['basket'][$basketkey]['netprice'] . '</td>

<form id="form1" action="" method="POST"> 

<td> <input  class="delete" type="submit" name="delete" value="delete">  </td>
<td> <input  class="edit" type="submit" name="edit" value="edit">  </td>
<td>	<input type="text"		name="get_cartname"		value=' . $_SESSION['basket'][$basketkey]['prodname'] .  '>	</td>
<td>	<input type="text"		name="get_cartprice"		value=' . $_SESSION['basket'][$basketkey]['price'] .  '>	</td>
<td>	<input type="text"		name="get_cartquantity"		value=' . $_SESSION['basket'][$basketkey]['quantity'] .  '>	</td>
<td>	<input type="text"		name="id"		value='.$basketkey.'>	</td>

</tr>

</form>';
}
$html_table .= '</table>';

?>