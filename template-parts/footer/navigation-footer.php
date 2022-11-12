<?php if ( is_active_sidebar( 'navigation-footer-1' ) )
{
    dynamic_sidebar( 'navigation-footer-1' );
}else
{

  echo ('<a href="#" class="d-block"> اخبارو مقالات  </a>');
}
?>

<?php if ( is_active_sidebar( 'navigation-footer-2' ) )
{
    dynamic_sidebar( 'navigation-footer-2' );
}else
{

    echo (' <a href="#" class="d-block"> سوالات متداول   </a>');
}
?>

<?php if ( is_active_sidebar( 'navigation-footer-3' ) )
{
    dynamic_sidebar( 'navigation-footer-3' );
}else
{

    echo (' <a href="#" class="d-block"> دربارما    </a>');
}
?>

<?php if ( is_active_sidebar( 'navigation-footer-4' ) )
{
    dynamic_sidebar( 'navigation-footer-4' );
}else
{

    echo (' <a href="#" class="d-block"> ارتباط با ما  </a>');
}
?>

