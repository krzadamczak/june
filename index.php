<?php 

get_header();

?>
<body class="page-wrapper">
<?php 

get_template_part('template-parts/site-header');
    echo get_theme_file_uri('\test/style.css');
    echo nl2br("\n\n");
    echo get_theme_file_path('\test/style.css');
?>
</body>
</html>