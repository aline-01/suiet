<!DOCTYPE html>
<html <?php language_attributes();?> <?php suiet_html_class_list() ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <?php
    wp_head();
    ?>
</head>
<body class="bg-light">
<?php
 wp_body_open();
?>
<style>
    @font-face {
        font-family: "iransans";
        src: url("<?php echo get_theme_file_uri('/assets/font/IRANSansWeb_Medium.eot')?>");
        src: url("<?php echo get_theme_file_uri('/assets/font/IRANSansWeb_Medium.woff')?>") format("woff");

    }
    .iransans{
        font-family: IRANSans;
    }
</style>

<?php get_template_part('template-parts/header/site-header');?>

