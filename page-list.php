<?php
/**
 * TEMPLATE NAME: LIST
 */

get_header('admin');
$post_type = $_SERVER[REQUEST_URI];
$post_type = explode("/", $post_type);

?>

<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1 class="panel-title">Cadastros </h1>
        </div>
        <div class="panel-body">
            <hr>
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>#</th>
                    <th class="text-left">Name</th>
                    <th class="text-right">Options</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $args = array(
                    'numberposts'	=> -1,
                    'post_type'		=> basename($post_type[2]),
                  );
                  $query = new WP_Query( $args );
                  if( $query->have_posts() ):
                      while( $query->have_posts() ) : $query->the_post();
                          $postid = get_the_ID(); 
                ?>
                        <tr>
                            <td width="50px"><strong><?php echo $postid; ?></strong></td>
                            <td class="text-left"><?php echo the_title(); ?></td>
                            <td width="35%" class="text-right">
                                <a class="btn btn-default btn-sm" href="<?php get_post_permalink( $postid ); ?>" target="_blank">
                                    Visualizar
                                </a>
                                <a class="btn btn-default btn-sm" href="<?php echo $base_uri; ?>/admin/editar/?id=<?php echo $postid; ?>">
                                    Editar
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?php echo get_delete_post_link( $postid ); ?>" onclick="return confirm('Would you really like to delete this entry?');">
                                    Deletar
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php get_footer('admin'); ?>
