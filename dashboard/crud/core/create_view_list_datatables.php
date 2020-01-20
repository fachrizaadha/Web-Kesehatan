12i:#a7rvYUPH4<?php 
$string="
            <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"box box-primary\">
            <div class=\"box-header\">
              <h3 class=\"box-title\">Data ".label(ucfirst($c_url))."</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
           
<?php
// proses hapus data
if (isset(\$_GET['aksi'])) {
    if (\$_GET['aksi'] == 'hapus') {
        // baca ID dari parameter ID  yang akan dihapus
		\$id = \$_GET['id'];
        // proses hapus data berdasarkan ID
        \$sql=\$mysqli->query(\"DELETE FROM ".$table_name." WHERE `".$pk."`= '\$id'\");
		echo \"<script>document.location='?page=".$c_url."';</script>\";

	 } elseif (\$_GET['aksi'] == 'tambah' || \$_GET['aksi'] == 'edit') {
		 \$id = \$_GET['id'];
		if(\$id==''){\$button=\"Save\";}else{\$button='Update';}
		 \$query=\"SELECT * FROM ".$table_name." WHERE `".$pk."`= '\$id'\";
		\$result= \$mysqli->query(\$query);
		\$data=\$result->fetch_assoc();
		?>

        <form action=\"?page=".$c_url."&aksi=prosesSubmit\" method=\"post\" class=\"form-horizontal\">
		 <div class=\"form-body\">";
foreach ($non_pk as $row) {
    if ($row["data_type"] == 'text')
    {
    $string .= "\n\t    <div class=\"form-group\">
            <label for=\"".$row["column_name"]."\" class=\"col-sm-3 control-label\">".label($row["column_name"])." </label>
           <div class=\"col-sm-4\">
		    <textarea class=\"form-control\" rows=\"3\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\"><?php echo \$data[\"".$row["column_name"]."\"]; ?></textarea>
        </div>
		</div>";
    } else
    {
    $string .= "\n\t    <div class=\"form-group\">
            <label for=\"".$row["data_type"]."\" class=\"col-sm-3 control-label\">".label($row["column_name"])." </label>
          <div class=\"col-sm-4\"> 
		   <input type=\"text\" class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo \$data[\"".$row["column_name"]."\"]; ?>\" />
        </div>
		</div>";
    }
}
$string .= "\n\t   </div>
        			<div class=\"form-actions\">
					<div class=\"row\">
					<div class=\"col-md-offset-3 col-md-9\">";
$string .= "\n\t    <input type=\"hidden\" name=\"".$pk."\" value=\"<?php echo \$data[\"".$pk."\"]; ?>\" /> ";
$string .= "\n\t    <input type=\"hidden\" name=\"statusTombol\" value=\"<?php echo \$button ?>\" /> ";
$string .= "\n\t    <button type=\"submit\" class=\"btn btn-primary\"><span class='glyphicon glyphicon-save'></span> <?php echo \$button ?></button> ";
$string .= "\n\t    <a class='btn btn-danger' onclick=self.history.back() ><span class='glyphicon glyphicon-arrow-left'></span> Kembali</a>";
$string .= "\n\t</div>
				</div>
              </div>
			  </form>
   
   <?php } elseif (\$_GET['aksi'] == 'detail') {
	    \$id = \$_GET['id'];
		 	
		 \$query=\"SELECT * FROM ".$table_name." WHERE `".$pk."`= '\$id'\";
		\$result= \$mysqli->query(\$query);
		\$data=\$result->fetch_assoc();
		?>

        <table class=\"table table-bordered table-striped table-condensed flip-content\">";
foreach ($non_pk as $row) {
    $string .= "\n\t    <tr><td>".label($row["column_name"])."</td><td><?php echo \$data[\"".$row["column_name"]."\"]; ?></td></tr>";
}
$string .= "\n\t    <tr><td></td><td><a href=\"?page=".$c_url."\" class=\"btn btn-info\"><i class=\"fa fa-reply\"></i> Kembali</a></td></tr>";
$string .= "\n\t</table>
       
<?php } elseif (\$_GET['aksi'] == 'prosesSubmit') {
	   ";
   $keyss="";
   $value='';
   $upd='';
    foreach ($all as $row) {
    $string .= "\n\t  $" . $row['column_name'] . " = \$_POST['" . $row['column_name'] . "'];";
	$keyss=$keyss."`".$row['column_name']."`,";
	$value=$value."'$".$row['column_name']."',";
	$upd=$upd."`".$row['column_name'] . "` = '$".$row['column_name']."',";
	}
	$data_awal=explode(' ',$keyss);
	$data_awalup=explode(', ',$upd);
	$data_awalvv=explode(' ',$value);
    $values=implode(', ', $data_awalvv);
	$keys=implode(", ", $data_awal);
	$upds=implode(", ", $data_awalup);
	$keysss= substr_replace($keys, '',-1);
	$valuess= substr_replace($values, '',-1);
	$updss= substr_replace($upds, '',-1);
	$string.="
	switch(\$_POST['statusTombol']) {
	case 'Save':
			\$query=\$mysqli->query(\"INSERT INTO ".$table_name." (".$keysss.") VALUES (".$valuess.")\");
	break;
	case 'Update':
			\$query=\$mysqli->query(\"UPDATE ".$table_name." set ".$updss." WHERE ".$pk."='$".$pk."'\");
	break;
	}
 echo \"<script>document.location='?page=".$c_url."';</script>\";
    }
}else {// end aksi?>";
$string .= "\n\t
							<a href=\"?page=".$c_url."&aksi=tambah\" class=\"btn btn-primary \"><i class=\"fa fa-plus\"></i> <span class=\"hidden-480\">
								Tambah Data </span></a> 
<br><br>
                           
								
							
							<table class=\"table table-bordered table-striped table-condensed flip-content\" id=\"mytable\">
							<thead class=\"flip-content bg-blue\">
                <tr>
                    <th width=\"8px\">No</th>";
foreach ($non_pk as $row) {
    $string .= "\n\t\t    <th>" . label($row['column_name']) . "</th>";
}
$string .= "\n\t\t    <th>Action</th>
                </tr>
            </thead>";
$string .= "\n\t    <tbody>
            <?php
            \$start = 0;
			 \$query=\"SELECT * FROM ".$table_name." order by `".$pk."` asc \";
		\$result= \$mysqli->query(\$query);
		while(\$$c_url=\$result->fetch_assoc())
		 {
                ?>
                <tr>";

$string .= "\n\t\t    <td><?php echo ++\$start ?></td>";

foreach ($non_pk as $row) {
    $string .= "\n\t\t    <td><?php echo $" . $c_url ."[\"". $row['column_name'] . "\"]; ?></td>";
}

$string .= "\n\t\t    <td style=\"text-align:center\" width=\"200px\">
<a href=\"?page=".$c_url."&aksi=detail&id=<?php echo $".$c_url."[\"".$pk."\"];?>\" class=\"btn btn-primary btn-xs purple\"><i class=\"fa fa-search\"></i> Detail</a> 
<a href=\"?page=".$c_url."&aksi=edit&id=<?php echo $".$c_url."[\"".$pk."\"];?>\" class=\"btn btn-warning btn-xs purple\"><i class=\"fa fa-edit\"></i> Edit</a> 
<a href=\"?page=".$c_url."&aksi=hapus&id=<?php echo $".$c_url."[\"".$pk."\"];?>\" class=\"btn btn-danger btn-xs purple\" onclick=\"javasciprt: return confirm('Are You Sure ?')\"><i class=\"fa fa-trash-o\"></i> Delete</a>
              "
        . "\n\t\t    </td>";

$string .=  "\n\t        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
		

      <?php }?> 
	</div>
        </div>
        </div>
        </div>
        </section> ";


$hasil_view_list = createFile($string, $target."views/v_" . $c_url.".php");
?>