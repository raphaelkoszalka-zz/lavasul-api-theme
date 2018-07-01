<?php
/**
 * TEMPLATE NAME: Admin
 *
 */

get_header('admin'); ?>

<!-- these content will be looped -->
<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Blog</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/blog/adicionar/">
                        <button class="btn btn-block btn-default">
                            Adicionar
                        </button>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/blog/listar/">
                        <button class="btn btn-block btn-default">
                            Listar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Parceiros</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/partner/adicionar/">
                        <button class="btn btn-block btn-default">
                            Adicionar
                        </button>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/partner/listar/">
                        <button class="btn btn-block btn-default">
                            Listar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Galeria</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/gallery/adicionar/">
                        <button class="btn btn-block btn-default">
                            Adicionar
                        </button>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/gallery/listar/">
                        <button class="btn btn-block btn-default">
                            Listar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Sobre Nós</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/company/adicionar/">
                        <button class="btn btn-block btn-default">
                            Adicionar
                        </button>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/company/listar/">
                        <button class="btn btn-block btn-default">
                            Listar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Trabalhe Conosco</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/employer/adicionar/">
                        <button class="btn btn-block btn-default">
                            Adicionar
                        </button>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/employer/listar/">
                        <button class="btn btn-block btn-default">
                            Listar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Serviços</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/service/adicionar/">
                        <button class="btn btn-block btn-default">
                            Adicionar
                        </button>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/service/listar/">
                        <button class="btn btn-block btn-default">
                            Listar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Cidades Atendidas</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/city/adicionar/">
                        <button class="btn btn-block btn-default">
                            Adicionar
                        </button>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/city/listar/">
                        <button class="btn btn-block btn-default">
                            Listar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Clientes</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/client/adicionar/">
                        <button class="btn btn-block btn-default">
                            Adicionar
                        </button>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/client/listar/">
                        <button class="btn btn-block btn-default">
                            Listar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Capa da Home</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/slide/adicionar/">
                        <button class="btn btn-block btn-default">
                            Adicionar
                        </button>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/slide/listar/">
                        <button class="btn btn-block btn-default">
                            Listar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Depoimentos</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/testimonial/adicionar/">
                        <button class="btn btn-block btn-default">
                            Adicionar
                        </button>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
                    <hr />
                    <a href="<?php echo $base_url; ?>/admin/testimonial/listar/">
                        <button class="btn btn-block btn-default">
                            Listar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="clearfix"></div>

<?php get_footer('admin'); ?>
