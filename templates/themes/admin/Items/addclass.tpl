{include file="file:[$THEME]header.tpl" TITLE="Add Class"}
<h1>Add Class</h1>
<a href="index.php?mod=Items&act=class">Back</a> <br /><br />
<table width="90%"><tr>
<th style="text-align: left;">Description</th>
<th style="text-align: left;">Field</th></tr>
<form action="index.php?mod=Items&act=doaddclass" method="post" > 
<tr><td>Name</td> <td><input name="name" type="text" maxlength="50"></td></tr>
<tr><td>Able to use (otherwise equip/unequip)</td> <td><input type="checkbox" name="useable" value="1"></td></tr>
<tr><td>Able to buy</td> <td><input type="checkbox" name="buyable" value="1">  </td></tr>
<tr><td>Able to sell</td> <td><input type="checkbox" name="sellable" value="1">  </td></tr>
<tr><td><input name="Submit1" type="submit" value="submit"></tr></td>
</form></table>


{include file="file:[$THEME]footer.tpl"}
