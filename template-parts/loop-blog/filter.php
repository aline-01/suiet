<div class="col-12 mb-5">
    <div class="card border-0 breadcrumb_inside_blog" style="border-radius: 25px;">
        <div class="card-body py-2 d-flex flex-column flex-lg-row justify-content-between align-items-center">
            <div class="breadcrumb breadcrumb1 bg-transparent pb-0">
                <?php get_breadcrumb(); ?>
            </div>
            <div>
                <ul class="nav pr-0 d-flex align-items-center filter">
                    <li class="nav-item my-0 ml-lg-0">
                        <i class="fas fa-sort-amount-down align-middle"></i>
                        فیلتر بر اساس :
                    </li>
                    <li class="nav-item font-md">
                        <a href="<?php echo add_query_arg(['orderby'=>'date','order'=>'desc'])?>" class="nav-link px-2"> جدیدترین </a>
                    </li>
                    <li class="nav-item font-md">
                        <a href="#" class="nav-link px-2 active"> پربازدیدترین </a>
                    </li>
                    <li class="nav-item font-md">
                        <a href="<?php echo add_query_arg(['orderby'=>'date','order'=>'asc'])?>" class="nav-link px-2"> قدیمی ترین </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


