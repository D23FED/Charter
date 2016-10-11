<?php require( $_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); //begin base template ?>
<?php
//Content
$logos = array(
	"AE" => array(
		"unicode" => '\e600',
		"class" => ""
	),
	"Cinemax" => array(
		"unicode" => '\e601',
		"class" => "max"
	),
	"CNN" => array(
		"unicode" => '\e602',
		"class" => ""
	),
	"Epix" => array(
		"unicode" => '\e604',
		"class" => ""
	),
	"ESPN" => array(
		"unicode" => '\e605',
		"class" => ""
	),
	"HBO" => array(
		"unicode" => '\e607',
		"class" => ""
	),
	"HGTV" => array(
		"unicode" => '\e608',
		"class" => ""
	),
	"Showtime" => array(
		"unicode" => '\e609',
		"class" => ""
	),
	"Starz" => array(
		"unicode" => '\e60a',
		"class" => ""
	),
	"The Movie Channel" => array(
		"unicode" => '\e60b',
		"class" => "tmc"
	),
	"MTV" => array(
		"unicode" => '\e900',
		"class" => ""
	),
	"Discovery" => array(
		"unicode" => '\e901',
		"class" => "disc"
	),
	"TLC" => array(
		"unicode" => '\e902',
		"class" => ""
	),
	"Fox" => array(
		"unicode" => '\e903',
		"class" => ""
	),
	"Hallmark" => array(
		"unicode" => '\e904',
		"class" => "hall"
	),
	"Encore" => array(
		"unicode" => '\e905',
		"class" => ""
	),
	"NFL (Vertical)" => array(
		"unicode" => '\e906',
		"class" => "nfl-vert"
	),
	"NFL (Horizontal)" => array(
		"unicode" => '\e909',
		"class" => "nfl-hz"
	),
	"NFL RedZone (Horizontal)" => array(
		"unicode" => '\e907',
		"class" => "nfl-rz-hz"
	),
	"NFL RedZone (Vertical)" => array(
		"unicode" => '\e908',
		"class" => "nfl-rz-vert"
	)
)
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-8 col-md-offset-2">
			<table class="table">
				<thead>
					<tr>
						<th>Logo Name</th>
						<th>Unicode (CSS)</th>
						<th>Class</th>
						<th>Example</th>
					</tr>
				</thead>
				<tbody>
				<?php
					foreach($logos as $logo => $logo_data) {
						if ($logo_data['class'] == "") {
							$class = str_replace(' ', '-', $logo);
							$class = "logo-".strtolower($class);
						} else {
							$class = "logo-".$logo_data['class'];
						}
						$code = $logo_data['unicode'];
						$str = "<tr>";
						$str .= "<td>$logo</td>";
						$str .= "<td>$code</td>";
						$str .= "<td>$class</td>";
						$str .= "<td><div class='channel-logo $class'></td>";
						$str .= "</tr>";
						echo $str;
					};
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php require($site['files']['site_footer']); //end base template ?>
