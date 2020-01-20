<?php 
$string = "\n\t<div class=\"portlet\">
						<div class=\"portlet-title\">
							<div class=\"caption\">
								<i class=\"fa fa-windows\"></i> Data ".ucfirst($table_name)."
							</div>
							
							<div class=\"actions\">
                            <?php echo anchor(site_url('".$c_url."/create'), '<i class=\"fa fa-plus\"></i>
								<span class=\"hidden-480\">
								Add New </span>', 'class=\"btn btn-primary\"'); ?>
								
							  <div class=\"btn-group\">
									<a class=\"btn btn-success dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">
									<i class=\"fa fa-share\"></i>
									<span class=\"hidden-480\">Tools </span>
									<i class=\"fa fa-angle-down\"></i>
									</a>
									<ul class=\"dropdown-menu pull-right\">
									";
									if ($export_excel == '1') {
    $string .= "\n\t\t <li><?php echo anchor(site_url('".$c_url."/excel'), 'Export to Excel', ''); ?></li>";
}
if ($export_word == '1') {
    $string .= "\n\t\t <li><?php echo anchor(site_url('".$c_url."/word'), 'Export to Word', ''); ?></li>";
}
if ($export_pdf == '1') {
    $string .= "\n\t\t <li><?php echo anchor(site_url('".$c_url."/pdf'), 'Export to PDF', ''); ?></li>";
}
$string .= "\n\t\t 
									</ul>
								</div>
							</div>
						</div>
						
						        <div class=\"row\" style=\"margin-bottom: 10px\">
            <div class=\"col-md-4\">
                <?php echo anchor(site_url('".$c_url."/create'),'Create', 'class=\"btn btn-primary\"'); ?>
            </div>
            <div class=\"col-md-4 text-center\">
                <div style=\"margin-top: 8px\" id=\"message\">
                    <?php echo \$this->session->userdata('message') <> '' ? \$this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class=\"col-md-1 text-right\">
            </div>
            <div class=\"col-md-3 text-right\">
                <form action=\"<?php echo site_url('$c_url/index'); ?>\" class=\"form-inline\" method=\"get\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" name=\"q\" value=\"<?php echo \$q; ?>\">
                        <span class=\"input-group-btn\">
                            <?php 
                                if (\$q <> '')
                                {
                                    ?>
                                    <a href=\"<?php echo site_url('$c_url'); ?>\" class=\"btn btn-default\">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class=\"btn btn-primary\" type=\"submit\">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
		
		<div class=\"portlet-body flip-scroll\">
        <table class=\"table table-bordered\" style=\"margin-bottom: 10px\">
		<thead class=\"flip-content\">
            <tr>
                <th>No</th>";
foreach ($non_pk as $row) {
    $string .= "\n\t\t<th>" . label($row['column_name']) . "</th>";
}
$string .= "\n\t\t<th>Action</th>
            </tr></thead>";
$string .= "<?php
            foreach ($" . $c_url . "_data as \$$c_url)
            {
                ?>
                <tr>";

$string .= "\n\t\t\t<td width=\"80px\"><?php echo ++\$start ?></td>";
foreach ($non_pk as $row) {
    $string .= "\n\t\t\t<td><?php echo $" . $c_url ."->". $row['column_name'] . " ?></td>";
}


$string .= "\n\t\t    <td style=\"text-align:center\" width=\"200px\">"
        . "\n\t\t\t<?php "
        . "\n\t\t\techo anchor(site_url('".$c_url."/read/'.$".$c_url."->".$pk."),'<i class=\"fa fa-search\"></i> Read','title=\"detail\" class=\"btn btn-info btn-xs purple\"'); "
        . "\n\t\t\techo ' '; "
        . "\n\t\t\techo anchor(site_url('".$c_url."/update/'.$".$c_url."->".$pk."),'<i class=\"fa fa-edit\"></i> Edit','title=\"edit\" class=\"btn btn-warning btn-xs purple\"'); "
        . "\n\t\t\techo ' '; "
        . "\n\t\t\techo anchor(site_url('".$c_url."/delete/'.$".$c_url."->".$pk."),'<i class=\"fa fa-trash-o\"></i> Delete','onclick=\"javasciprt: return confirm(\\'Are You Sure ?\\')\" title=\"delete\"  class=\"btn btn-danger btn-xs black\"'); "
        . "\n\t\t\t?>"
        . "\n\t\t    </td>";

$string .=  "\n\t        </tr>
                <?php
            }
            ?>
                    </table>
        <div class=\"row\">
       
            <div class=\"col-md-12 text-right\">
                <?php echo \$pagination ?>
            </div>
        </div>
    </body>
</html>";


$hasil_view_list = createFile($string, $target."views/" . $c_url . "/" . $v_list_file);
?>