<?php
if (arg(0) == 'node' && is_numeric(arg(1))) {
  $nid = arg(1);
  if ($nid) {
$nodes = node_load($nid);
    $ref_nid = $nodes->field_general_banner_4['und'][0]['target_id'];
    $ref_node = node_load($ref_nid);
  ?>
  <div id="section-4" class="outer clearfix">
            <div class="inner clearfix">
                <div class="col-sm-6 hidden-sm hidden-md hidden-lg">
                    <div class="img-container">
                        [aet:node:<?php print $nid; ?>:field-general-banner-4:field_responsive_image]
                    </div>
                </div>
                <div class="col-sm-6">
                    <h2>[aet:node:<?php print $nid; ?>:field-general-banner-4:field_hs_hero_title]</h2>
                    <div class="desc-container clearfix">
                        [aet:node:<?php print $nid; ?>:field-general-banner-4:field_hs_description]
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="img-container">
                        [aet:node:<?php print $nid; ?>:field-general-banner-4:field_responsive_image]
                    </div>
                </div>
            </div>
        </div>
<?php
  }
}
?>
