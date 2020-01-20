<?php 
$string = "
		<div class=\"portlet\">
						<div class=\"portlet-title\">
							<div class=\"caption\">
								<i class=\"fa fa-reorder\"></i> ".label(ucfirst($table_name))." <?php echo \$button ?>
							</div>
							
						</div>
                        
  <div class=\"portlet-body form\">
        <form action=\"<?php echo \$action; ?>\" method=\"post\" class=\"form-horizontal\">
		 <div class=\"form-body\">";
foreach ($non_pk as $row) {
    if ($row["data_type"] == 'text')
    {
    $string .= "\n\t    <div class=\"form-group\">
            <label for=\"".$row["column_name"]."\" class=\"col-sm-3 control-label\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
           <div class=\"col-sm-4\">
		    <textarea class=\"form-control\" rows=\"3\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\"><?php echo $".$row["column_name"]."; ?></textarea>
        </div>
		</div>";
    } else
    {
    $string .= "\n\t    <div class=\"form-group\">
            <label for=\"".$row["data_type"]."\" class=\"col-sm-3 control-label\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
          <div class=\"col-sm-4\"> 
		   <input type=\"text\" class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" />
        </div>
		</div>";
    }
}
$string .= "\n\t   </div>
        			<div class=\"form-actions\">
					<div class=\"row\">
					<div class=\"col-md-offset-3 col-md-9\">";
$string .= "\n\t    <input type=\"hidden\" name=\"".$pk."\" value=\"<?php echo $".$pk."; ?>\" /> ";
$string .= "\n\t    <button type=\"submit\" class=\"btn btn-primary\"><span class='glyphicon glyphicon-save'></span> <?php echo \$button ?></button> ";
$string .= "\n\t    <a class='btn btn-danger' onclick=self.history.back() ><span class='glyphicon glyphicon-arrow-left'></span> Kembali</a>";
$string .= "\n\t</div>
				</div>
              </div>
			  </form>
    </div>
</div>";

$hasil_view_form = createFile($string, $target."views/" . $c_url . "/" . $v_form_file);
?>