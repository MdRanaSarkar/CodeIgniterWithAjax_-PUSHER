<?php if(!empty($users)){ foreach($users as $user)
	{?>
					<tr>
					<td>
					   <?php echo $user['id'] ?>
					</td>
					<td>
					   <?php echo $user['Name'] ?>
					</td>
					<td>
					   <?php echo $user['Gmail'] ?>
					</td>
					<td><a href="<?php echo base_url().'delete/'.$user['id']?>">Delete</a>|<a href="<?php echo base_url().'update/'.$user['id']?>">Update</a></td>
					</tr>
					<?php }} else{ ?>
					<tr>
					<td><?php echo "records not found";?> </td>
	</tr>
<?php }?>
