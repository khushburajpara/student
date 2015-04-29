<?php 
include 'dbcon.php';
 if(isset($_POST['id_chk']) && $_POST['id_chk']!='')
 	{
	  	$sql=mysql_query("SELECT * FROM subcategory where Subcategory_ID=".$_POST['id_chk']);
		if(mysql_num_rows($sql)>0)
			{
			?>
			<select id="ID<?php echo $_POST['counter'];?>" name="Sub<?php echo $_POST['counter'];?>" onchange="AjaxPrice(<?php echo $_POST['counter'];?>);">
           <option value="">--Select SubCategory--</option>
            <?php
				while($row=mysql_fetch_assoc($sql))
		{
?>
			<option  value="<?php echo $row['ID']; ?>"><?php echo $row['Subcategory_Name']; ?></option>
			
<?php
		}
		?>
		</select>
        <?php
}
}
if(isset($_POST['sub_id'])&& $_POST['sub_id']!='')
{

	$sql=mysql_query("SELECT Price FROM subcategory where ID=".$_POST['sub_id']);
	if(mysql_num_rows($sql)>0)
{
	$ary=mysql_fetch_array($sql);
	//$Price=$ary['Price'];
	 echo $ary['Price']; 
}

}
?>	

