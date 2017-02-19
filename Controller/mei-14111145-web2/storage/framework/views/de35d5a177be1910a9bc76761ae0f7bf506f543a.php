<?php $__env->startSection('content'); ?>
<html>
<body>
<form >
<table border="1">
<tr>
<th><a href="tambah"><input type="button" value="+ TAMBAH"/></a></th>
</tr>
<tr>
	<td>No</td>
	<td>Nama</td>
	<td>Nim</td>
	<td>Alamat</td>
	<td>Aksi</td>	
	</table>
</form>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>