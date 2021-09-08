
<?php 
// [destaque conteudo= ""]
function destaque ($atts) {
	$a = shortcode_atts(array(
		'foo' => 'algo',
		'bar' => 'algo mais',
	), $atts);

	return "<div class='
    destaque-box
    py-awe-24
    px-awe-16
    px-sm-awe-24
    px-md-awe-32
    px-lg-awe-48
    fw-bold
    ff-open-sans
    mb-awe-48
    '>
    <p class='m-0 fz-21 fz-md-26 lh-160'>{$atts['conteudo']}</p>
  </div>";
}
add_shortcode ('destaque', 'destaque');