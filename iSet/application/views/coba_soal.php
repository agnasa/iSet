<html>
<?php
//print_r($results);
?>

<style>
body{
	
}
#wrapper{
	margin:auto;
	width:1000px;
	background:#ecf0f1;
	padding: 10px;
}
table {
	padding:10px;
}
table:hover {
	background:#95a5a6;
}
label {
	cursor: pointer;
}
td:hover {
	color:#34495e;
}
</style>
<body>
<div id="wrapper">

	<?php
		echo form_open('murid/cekJawaban');
		$i=1;
		foreach($results as $row):	?>
		
	<table border="0" width="100%">
	<tr>
		<td width="10px;"><?php echo $i.". "; ?></td>
		<td colspan=2 ><?php echo $row->soal; ?></td>
	</tr>
	<tr>
		<td><?php /* no soal: buat debug aja */ //echo $row->nomer_soal ?></td>
		<td width="400px">
			<?php 
				$data = array(
					'name'        => $row->nomer_soal,
					'id'          => 'a'.$row->nomer_soal,
					'value'       => 'a',
					'checked'     => False,
					);
				echo form_radio($data);?> 
			<?php echo form_label("a. ".$row->a, 'a'.$row->nomer_soal);?>
		</td>
		<td width="400px">
			<?php 
				$data = array(
					'name'        => $row->nomer_soal,
					'id'          => 'c'.$row->nomer_soal,
					'value'       => 'c',
					'checked'     => False,
					);
				echo form_radio($data);?> 
			<?php echo form_label("c. ".$row->c, 'c'.$row->nomer_soal);?>
		</td>
	</tr>
	<tr>
		<td><?php /* jawaban: buat debug aja */ //echo $row->jawaban ?></td>
		<td>
			<?php 
				$data = array(
					'name'        => $row->nomer_soal,
					'id'          => 'b'.$row->nomer_soal,
					'value'       => 'b',
					'checked'     => False,
					);
				echo form_radio($data);?> 
			<?php echo form_label("b. ".$row->b, 'b'.$row->nomer_soal);?>
		</td>
		<td>
			<?php 
				$data = array(
					'name'        => $row->nomer_soal,
					'id'          => 'd'.$row->nomer_soal,
					'value'       => 'd',
					'checked'     => False,
					);
				echo form_radio($data);?> 
			<?php echo form_label("d. ".$row->d, 'd'.$row->nomer_soal);?>
		</td>
	</tr>
	</table>
	<br>
	<?php
		$i++;
		$id_modul 		= $row->id_modul;
		$id_pelajaran 	= $row->id_pelajaran;
		endforeach;
		
	echo form_hidden('jumlah',$i);
	echo form_hidden('id_modul',$id_modul);
	echo form_hidden('id_pelajaran',$id_pelajaran);
	echo form_submit('submit','Kumpulkan');
    echo form_close();
	?>

</div>
</body>
</html>