<?php /* Template Name: Feed-Page */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package newasc
 */

get_header();
?>
<meta content="width=device-width, initial-scale=1" name="viewport" />
<style>

.BottomForm,.sub-footer{
	display:none;
}
footer{
	display:none;
}
header{
	display:none;
}
#wpadminbar{
	display:none;
}

.insta-gallery-list{ margin: 0 !important; }
/*safri css start*/
_::-webkit-full-page-media, _:future, :root .responsivecontainer {

 width: 100%; padding-right: 9px;
}
.footer-data-last iframe {
    overflow-y: hidden !important;
}
/*safari css end*/
.insta-gallery-feed[data-feed_layout="masonry"] .insta-gallery-list .insta-gallery-item, .qligg-mfp-wrap[data-feed_layout="masonry"] .insta-gallery-list .insta-gallery-item, .insta-gallery-feed[data-feed_layout="gallery"] .insta-gallery-list .insta-gallery-item, .qligg-mfp-wrap[data-feed_layout="gallery"] .insta-gallery-list .insta-gallery-item {
    min-width: 33.33% !important;
}
@media(max-width:480px){
.insta-gallery-feed[data-feed_layout="masonry"] .insta-gallery-list .insta-gallery-item, .qligg-mfp-wrap[data-feed_layout="masonry"] .insta-gallery-list .insta-gallery-item, .insta-gallery-feed[data-feed_layout="gallery"] .insta-gallery-list .insta-gallery-item, .qligg-mfp-wrap[data-feed_layout="gallery"] .insta-gallery-list .insta-gallery-item { min-width: 50% !important; }

}

body{
	background: #303030 !important;
	overflow-x:hidden !important;
}

</style>
<div class="responsivecontainer">
<div class="row">
	<div class="col-lg-4">
	<?php echo do_shortcode('[insta-gallery id="1"]'); ?>
	</div>
</div>
</div>
<?php
get_sidebar();
get_footer();

?>